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


class HomeController extends AbstractController
{

    private $findApi;


    public function __construct(LoggerInterface $logger, FindApiService $findApi)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;

    }

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

		$data['required'] = $_ENV['REQUIRED_INPUT'];

        $associations = $this->findApi->getAssociations();
        $listes = $this->findApi->getListes();
        $towns = $this->findApi->getTowns(null);
// exit(var_dump($listes));
        $data['associations'] = $associations['data'];
        $data['listes'] = $listes['data'];
        $data['towns'] = $towns['data'];
        $data['regions'] = array_unique(array_column($towns['data'], 'region'));

        return $this->render('home.html.twig', $data);
    }
    
    /**
     * @Route("/revisions", name="revisions")
     * @Template()
     */
    public function revisions(Request $request)
    {
        return $this->render('revisions/revisions.html.twig');
    }



}