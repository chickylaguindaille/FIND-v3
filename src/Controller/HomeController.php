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

class HomeController extends AbstractController
{

    private $findApi;
    private $findAuth;


    public function __construct(LoggerInterface $logger, FindApiService $findApi, FindAuthService $findAuth)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;
        $this->findAuth = $findAuth;
    }

    /**
     * @Route("/app/bar", name="bar")
     * @Template()
     */
    public function bar(Request $request)
    {
	$data['page'] = "bar";
    $user = $this->getUser();
    if ($user  != null){
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
    }
        return $this->render('bar/bar.html.twig', $data);
        //return $this->render('construction.html.twig', $data);
    }

    /**
     * @Route("/app/calendar", name="calendar")
     * @Template()
     */
    public function calendar(Request $request)
    {
	$data['page'] = "calendar";
    $user = $this->getUser();
    if ($user  != null){
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
    }
        return $this->render('calendar/calendar.html.twig', $data);
        //return $this->render('construction.html.twig', $data);

    }

    /**
     * @Route("/app/accueil", name="accueil")
     * @Template()
     */
    public function accueil(Request $request)
    {
        $data['page'] = "FIND";
        $data['typepage'] = "homepage";
        
		$data['required'] = $_ENV['REQUIRED_INPUT'];

        $associations = $this->findApi->getAssociations();
        $listes = $this->findApi->getListes();
        $towns = $this->findApi->getTowns(null);
// exit(var_dump($listes));
        $data['associations'] = $associations['data'];
        $data['listes'] = $listes['data'];
        $data['towns'] = $towns['data'];
        $data['regions'] = array_unique(array_column($towns['data'], 'region'));

        $user = $this->getUser();
        if ($user !== null) {
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $data['profile'] = $profile;
        }
    
        return $this->render('find/home.html.twig', $data);
    }
    
    /**
     * @Route("/app/revisions", name="revisions")
     * @Template()
     */
    public function revisions(Request $request)
    {
	$data['page'] = "revisions";
    $user = $this->getUser();
    if ($user  != null){
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
    }
        // return $this->render('revisions/revisions.html.twig', $data);
        return $this->render('construction.html.twig', $data);
    }



}
