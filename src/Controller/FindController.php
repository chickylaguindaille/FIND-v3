<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        $data['typepage'] = "towns";

        $user = $this->getUser();
        if ($user !== null) {
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;
        }

        // $country = $request->get('country');
        $data['country'] = $country;

        $towns = $this->findApi->getTowns($country);
        // exit(var_dump($towns));
        $data['towns'] = $towns['data'];
        // exit(var_dump($data['towns']));

            return $this->render('find/towns/town.html.twig', $data );
        }


    
    // VILLES RECHERCHE
        #[Route('/app/search/towns', name: 'search_towns', methods: ['GET'])]
        public function changeVilles(Request $request, VilleRepository $villeRepository): Response
        {

        $country = $_GET['country'];
        $startsearch = $_GET['text'];
        // $onsearch = $_GET['text'];
        $tri = $_GET['tri'];
        $data['tri'] = $tri;

        if($_GET['search'] == "startsearch"){
            $startsearch = $_GET['text'];
        }else{
            $startsearch = null;
        }

        if($_GET['search'] == "onsearch"){
            $onsearch = $_GET['text'];
        }else{
            $onsearch = null;
        }

        $filteredtowns = $this->findApi->getTowns($country, null, $startsearch, $onsearch, $tri);
        $data['towns'] = $filteredtowns['data'];
        $data['country'] = $country;
        // exit(var_dump($filteredtowns['data']));
    
            return $this->render('find/towns/townfiltered.html.twig', $data );
        }













    

    // CORPORATIONS
        #[Route('/app/Localisation/{country}/{ville}/Corporations', name: 'corporations', methods: ['GET'])]
        public function corporations($country, $ville, Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {
            $data['page'] = "FIND";
            $data['typepage'] = "associationsbylocalisation";
            // exit(var_dump($data['typepage']));

            $user = $this->getUser();
            if ($user !== null) {
                $profile = $this->findAuth->getUserByEmail($user->getEmail());
                $data['profile'] = $profile;
            }

            $listes = $this->findApi->getListes();
            $data['listes'] = $listes['data'];

            $data['country'] = $country;
            $data['ville'] = $ville;
            $villeid = $request->get('villeid');

            $data['town'] = $this->findApi->getTown($villeid);
            $associations = $this->findApi->getAssociations($country, null, $ville, null, null, null);
            $data['associations'] = $associations['data'];

            return $this->render('find/corporations/corporations.html.twig', $data);
        }


        // CORPORATION RECHERCHE
        #[Route('/app/search/corporations', name: 'search_corporations', methods: ['GET'])]
        public function changeCorporations(Request $request): Response
        {
            
            // $country = $_GET['country'];
            // $data['country'] = $country;

            // $town = $_GET['town'];
            // $data['ville'] = $town;

            // $startsearch = $_GET['text'];
            $inputData['text'] = $_GET['text'];
            $inputData['country'] = $_GET['country'];
            $inputData['town'] = $_GET['town'];
            $inputData['typeasso'] = $_GET['typeasso'];
            $inputData['hat'] = $_GET['hat'];
            $inputData['gender'] = $_GET['gender'];
            $inputData['search'] = $_GET['search'];
            $data['tri'] = $_GET['tri'];
            $data['typepage'] = $_GET['typepage'];

            $data['allfilter'] = $inputData;
            if($inputData['search'] == "startsearch"){
                $startsearch = $inputData['text'];
            }else{
                $startsearch = null;
            }

            if($inputData['search'] == "onsearch"){
                $onsearch = $inputData['text'];
            }else{
                $onsearch = null;
            }

            $associations = $this->findApi->getAssociations($inputData['country'], null, $inputData['town'], $inputData['typeasso'], $inputData['hat'], $inputData['gender'], $startsearch, $onsearch, $data['tri']);
            
            // exit(var_dump($associations));
            // exit(var_dump($data['allfilter']));
            
            $data['associations'] = $associations['data'];
            // $data['country'] = $country;
            // exit(var_dump($data['typepage']));
            if ($data['typepage'] == "homepage"){
                // exit(var_dump("homepage"));
                // return new JsonResponse($data);
                // exit(var_dump($data['associations']));
                $data = array();
                foreach($associations['data'] as $asso)
                {
                    $data[] = array(
                        'label'     =>  $asso['name'],
                        'value'     =>  $asso['id']
                    );
                }

                if (empty($data)){
                    $data[] = array(
                        'label'     =>  "",
                        'value'     =>  ""
                    );
                }

                return new JsonResponse($data);
                // return new JsonResponse(json_encode($data));
            }else{
                return $this->render('find/corporations/corporationsfiltered.html.twig', $data );
            }
        }

        // CORPORATIONS HOMEPAGE FILTERED
        #[Route('/app/search/Corporations', name: 'corporations_hp', methods: ['POST'])]
        public function corporationsHP(Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {

            $data['page'] = "FIND";
            $data['typepage'] = "associations";

            $associations = $this->findApi->getAssociations();
            $listes = $this->findApi->getListes();
            $towns = $this->findApi->getTowns(null);

            $data['listes'] = $listes['data'];
            $data['towns'] = $towns['data'];
            $data['regions'] = array_unique(array_column($towns['data'], 'region'));

            $user = $this->getUser();
            if ($user !== null) {
                $profile = $this->findAuth->getUserByEmail($user->getEmail());
                $data['profile'] = $profile;
            }

            $inputData = $request->request->all();

            // exit(var_dump($inputData));

            $data['allfilter'] = $inputData;
            if($inputData['search'] == "startsearch"){
                $startsearch = $inputData['text'];
            }else{
                $startsearch = null;
            }

            if($inputData['search'] == "onsearch"){
                $onsearch = $inputData['text'];
            }else{
                $onsearch = null;
            }

            $associations = $this->findApi->getAssociations($inputData['country'], null, $inputData['town'], $inputData['typeasso'], $inputData['hat'], $inputData['gendertype'], $startsearch, $onsearch);
            $data['associations'] = $associations['data'];
            // exit(var_dump($associations['data']));

            $data['country'] = $inputData['country'];
            $data['ville'] = $inputData['town'];
            // $villeid = $request->get('villeid');

            // $data['town'] = $this->findApi->getTown($villeid);


            return $this->render('find/find.html.twig', $data);
        }
















    // CORPORATION
    #[Route('/app/Localisation/{country}/{ville}/{corpo}', name: 'corporation', methods: ['GET'])]
    public function corporation($country, $ville, Request $request): Response
    {
        $data['page'] = "FIND";

        $user = $this->getUser();
        if ($user !== null) {
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;
        }

        $data['country'] = $country;
        $data['ville'] = $ville;
        $associationid = $request->get('associationid');

        $data['association'] = $this->findApi->getAssociation($associationid);

        uksort($data['association']['committee'], function($a, $b) {
            return $b - $a;
        });

        return $this->render('find/corporations/corporation.html.twig', $data);
    }



        // CORPORATION
        // #[Route('/Localisation/corporation', name: 'corporation_html', methods: ['GET'])]
        // public function corporationHtml()
        // {
        //     $user = $this->getUser();
        //     $profile = $this->findAuth->getUserByEmail($user->getEmail());
        //     $data['profile'] = $profile;

        //     $data['page'] = "FIND";
        //     return $this->render('find/corporation.html.twig');
        // }


}
