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


class ProfileController extends AbstractController
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
     * @Route("/profile", name="profile")
     * @Template()
     */
    public function profile(Request $request)
    {
        $data['page'] = "profile";

        $user = $this->getUser();

        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
        
// exit(var_dump($profile));

        return $this->render('profile/profile.html.twig', $data);
    }

    /**
     * @Route("/modification/informations", name="modification_informations")
     * @Template()
     */
    public function modificationInformations(Request $request)
    {
        $listes = $this->findApi->getListes();
        $data['listes'] = $listes['data'];

        // exit(var_dump($listes));

        $user = $this->getUser();

        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
        
        // exit(var_dump($profile));

        return $this->render('inc/profilemodification/informationsmodification.html.twig', $data);
    }

    /**
     * @Route("/modification/informations/patch", name="modification_informations_patch")
     * @Template()
     */
    public function patchModificationInformations(Request $request)
    {
        $inputData = $request->request->all();
        // exit(var_dump($inputData));

        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());

        $profile = $this->findAuth->patchUser($user, $profile['id'], $inputData);


        // exit(var_dump($profile));

        
        return $this->redirectToRoute('modification_informations');
    }


}