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
use App\Entity\Particularites;
use App\Entity\Anecdotes;
use App\Form\CorporationsType;
use App\Form\ParticularitesType;
use App\Form\AnecdotesType;
use App\Repository\CorporationsRepository;
use App\Repository\ParticularitesRepository;
use App\Repository\AnecdotesRepository;
use App\Repository\ChantRepository;
use App\Repository\DecorumRepository;
use App\Repository\PinsRepository;
use App\Repository\CroixRepository;
use JMS\Serializer\SerializerBuilder;

class FindController extends AbstractController
{
    /**
     * @Route("/connexions", name="connexions")
     * @Template()
     */
    public function connexions(Request $request)
    {
        return $this->render('connexions/connexions.html.twig');
    }

    /**
     * @Route("/calendar", name="calendar")
     * @Template()
     */
    public function calendar(Request $request)
    {
        return $this->render('calendar/calendar.html.twig');
    }

    /**
     * @Route("/accueil", name="accueil")
     * @Template()
     */
    public function accueil(Request $request)
    {
        return $this->render('home.html.twig');
    }
    
    /**
     * @Route("/revisions", name="revisions")
     * @Template()
     */
    public function revisions(Request $request)
    {
        return $this->render('revisions/revisions.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     * @Template()
     */
    public function profile(Request $request)
    {
        return $this->render('profile/profile.html.twig');
    }


    // VILLES
        #[Route('/Localisation/{country}/Ville', name: 'ville', methods: ['GET'])]
        public function villes(Request $request, VilleRepository $villeRepository): Response
        {

        $country = $request->get('country');

        // TABLEAU VILLE
        $serializer = SerializerBuilder::create()->build();
        $ville = $villeRepository->findAll();
        $ville = $serializer->toArray($ville);

        $data['villes'] = $ville;

        $data['country'] = $country;

            return $this->render('location/town.html.twig', $data );
        }


    
    // VILLES RECHERCHE
        #[Route('/Localisation/{country}/Ville/change', name: 'change_ville', methods: ['GET'])]
        public function changeVilles($country, Request $request, VilleRepository $villeRepository): Response
        {
    
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
        #[Route('/Localisation/{country}/{ville}/Corporations', name: 'corporations', methods: ['GET'])]
        public function corporations($country, $ville, Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {
            $data['country'] = $country;
            $data['ville'] = $ville;

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

            $data['corporations'] = $filterarray;

            return $this->render('corporations/corporations.html.twig', $data);
        }



    // RECHERCHE CORPORATIONS
        #[Route('/Localisation/{country}/{ville}/Corporations/change', name: 'change_corporations', methods: ['GET'])]
        public function rechercheCorporations($country, $ville, Request $request, VilleRepository $villeRepository, CorporationsRepository $corporationsRepository): Response
        {

            $data['country'] = $country;
            $ville = $request->get('ville');

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
    #[Route('/Localisation/{country}/{ville}/{corpo}/{id}', name: 'corporation', methods: ['GET'])]
    public function corporation($country, $ville, Request $request, Corporations $corporation, ParticularitesRepository $particularitesRepository, AnecdotesRepository $anecdotesRepository, ChantRepository $chantRepository, DecorumRepository $decorumRepository, PinsRepository $pinsRepository, CroixRepository $croixRepository): Response
    {

        $serializer = SerializerBuilder::create()->build();

        $particularites = $particularitesRepository->findAll();
        $data['particularites'] = $serializer->toArray($particularites);

        $anecdotes = $anecdotesRepository->findAll();
        $data['anecdotes'] = $serializer->toArray($anecdotes);

        $chant = $chantRepository->findAll();
        $data['chant'] = $serializer->toArray($chant);

        $decorum = $decorumRepository->findAll();
        $data['decorum'] = $serializer->toArray($decorum);

        $pins = $pinsRepository->findAll();
        $data['pins'] = $serializer->toArray($pins);

        $croix = $croixRepository->findAll();
        $data['croix'] = $serializer->toArray($croix);

        $data['country'] = $country;

        $data['ville'] = $ville;

        $data['corporation'] = $serializer->toArray($corporation);

        return $this->render('corporations/corporation.html.twig', $data);

    }


}