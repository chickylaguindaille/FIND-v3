<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;

use App\Entity\Ville;
use App\Form\VilleType;
use App\Repository\VilleRepository;

use App\Entity\Corporations;
use App\Repository\CorporationsRepository;
use App\Repository\ParticularitesRepository;
use App\Repository\AnecdotesRepository;
use App\Repository\ChantRepository;
use App\Repository\DecorumRepository;
use App\Repository\PinsRepository;
use App\Repository\CroixRepository;
use JMS\Serializer\SerializerBuilder;
use Psr\Log\LoggerInterface;

use App\Service\FindApiService;
use App\Service\FindAuthService;


class FindController extends AbstractController
{

    private $findApi;
    private $findAuth;


    public function __construct(LoggerInterface $logger, FindApiService $findApi, FindAuthService $findAuth)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;
        $this->findAuth = $findAuth;
    }


    // VILLES
        #[Route('/app/Localisation/{country}/Villes', name: 'ville', methods: ['GET'])]
        public function villes($country, Request $request, VilleRepository $villeRepository): Response
        {
        $data['page'] = "FIND";

        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;

        // $country = $request->get('country');
        $data['country'] = $country;

        $towns = $this->findApi->getTowns($country);
        $data['towns'] = $towns['data'];
        // exit(var_dump($data['towns']));

            return $this->render('find/towns/town.html.twig', $data );
        }


    
    // VILLES RECHERCHE
        #[Route('/app/Localisation/{country}/Villes/change', name: 'change_ville', methods: ['GET'])]
        public function changeVilles($country, Request $request, VilleRepository $villeRepository): Response
        {
    
        $data['page'] = "FIND";

        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;

        // TABLEAU VILLE
        $serializer = SerializerBuilder::create()->build();
        $ville = $villeRepository->findAll();
        $ville = $serializer->toArray($ville);
    
        if(isset($_GET['texte'])){
            $texte = $_GET['texte'];
            $tri = $_GET['tri'];
    
            $numbervilles = count($ville) - 1;
            $filterarray = array();

            for ($i = 0; $i <= $numbervilles; $i++) {
                if($tri == 'debut')
                    if (str_starts_with($ville[$i]['nom'], ucfirst($texte))) {
                        array_push($filterarray, $ville[$i]);
                    }
                if($tri == 'contenu')
                    if (str_contains(strtolower($ville[$i]['nom']), strtolower($texte))) {
                        array_push($filterarray, $ville[$i]);
                    }
            }
    
        }
            $data['villes'] = $filterarray;
            $data['country'] = $country;
    
            return $this->render('location/town.search.html.twig', $data );
        }













    

    // CORPORATIONS
        #[Route('/app/Localisation/{country}/{ville}/Corporations', name: 'corporations', methods: ['GET'])]
        public function corporations($country, $ville, Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {
            $data['page'] = "FIND";

            $user = $this->getUser();
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;

            $data['country'] = $country;
            $data['ville'] = $ville;
            $villeid = $request->get('villeid');

            $data['town'] = $this->findApi->getTown($villeid);
            $associations = $this->findApi->getAssociations($country, null, $ville, null, null, null);
            $data['associations'] = $associations['data'];
            // exit(var_dump($data['associations']));

            // TABLEAU CORPORATIONS
            // $serializer = SerializerBuilder::create()->build();
            // $corporations = $corporationsRepository->findAll();
            // $corporations = $serializer->toArray($corporations);


            // $numbercorpos = count($corporations) - 1;
            // $filterarray = array();

            // for ($i = 0; $i <= $numbercorpos; $i++) {
            //     if($corporations[$i]['ville'] == $ville)
            //             array_push($filterarray, $corporations[$i]);
            // }

            // $data['corporations'] = $filterarray;

            return $this->render('corporations/corporations.html.twig', $data);
        }



    // RECHERCHE CORPORATIONS
        #[Route('/app/Localisation/{country}/{ville}/Corporations/change', name: 'change_corporations', methods: ['GET'])]
        public function rechercheCorporations($country, $ville, Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {
            $data['page'] = "FIND";

            $user = $this->getUser();
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;

            $data['country'] = $country;
            // $ville = $request->get('ville');

            // TABLEAU CORPORATIONS
            $serializer = SerializerBuilder::create()->build();
            $corporations = $corporationsRepository->findAll();
            $corporations = $serializer->toArray($corporations);

            $numbercorpos = count($corporations) - 1;
            $filterarray = array();

            for ($i = 0; $i <= $numbercorpos; $i++) {
                if($corporations[$i]['ville'] == $ville)
                        array_push($filterarray, $corporations[$i]);
            }


            if(isset($_GET['texte'])){
                $texte = $_GET['texte'];
                $tri = $_GET['tri'];

                $numbercorpotown = count($filterarray) - 1;
                $filterarraycorpos = array();

                for ($i = 0; $i <= $numbercorpotown; $i++) {
                    if($tri == 'debut')
                        if (str_starts_with($filterarray[$i]['nom'], ucfirst($texte))) {
                            array_push($filterarraycorpos, $filterarray[$i]);
                        }
                    if($tri == 'contenu')
                        if (str_contains(strtolower($filterarray[$i]['nom']), strtolower($texte))) {
                            array_push($filterarraycorpos, $filterarray[$i]);
                        }
                }
        
            }
                $data['corporations'] = $filterarraycorpos;


            return $this->render('corporations/corporations.search.html.twig', $data);
        }









    // CORPORATION
    #[Route('/app/Localisation/{country}/{ville}/{corpo}', name: 'corporation', methods: ['GET'])]
    public function corporation($country, $ville, Request $request): Response
    {
        $data['page'] = "FIND";

        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;

        $data['country'] = $country;
        $data['ville'] = $ville;
        $associationid = $request->get('associationid');

        $data['association'] = $this->findApi->getAssociation($associationid);

        uksort($data['association']['committee'], function($a, $b) {
            return $b - $a;
        });

        return $this->render('corporations/corporation.html.twig', $data);
    }



        // CORPORATION
        #[Route('/Localisation/corporation', name: 'corporation_html', methods: ['GET'])]
        public function corporationHtml()
        {
            $user = $this->getUser();
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;

            $data['page'] = "FIND";
            return $this->render('find/corporation.html.twig');
        }


}
