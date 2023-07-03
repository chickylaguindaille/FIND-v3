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



    protected function saveFile($file,$dir)
    {

        // exit(var_dump($dir));
        $filename = null;

        if (!empty($file)) 

        {
            // Verifier l'existence du dossier
            if (!file_exists($dir)) 
            {
                // Tentative de création du répertoire
                if (mkdir($dir)) 
                {   
                    $destination = $dir;
                    $filename = $file->getClientOriginalName();
                    $file->move($destination, $filename);
                } 
                else 
                {
                    $filestodelete = glob($dir);
                }
            } 
            else 
            {
                // Suppression des fichiers dans le dossier
                $filestodelete = glob($dir . '/*');
                foreach ($filestodelete as $filetodelete) {
                    if (is_file($filetodelete))
                        unlink($filetodelete);
                }
                $filename = $file->getClientOriginalName();
                $file->move($dir, $filename);
            }
        }

        return $filename;
    }




    /**
     * @Route("/app/profile", name="profile")
     * @Template()
     */
    public function profile(Request $request)
    {
        $data['page'] = "profile";

        $user = $this->getUser();

        if (!isset($user)){
            return $this->redirectToRoute('login', ["needtoconnect" => true]);
        }

        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;
        
// exit(var_dump($profile));

        return $this->render('profile/profile.html.twig', $data);
    }

    /**
     * @Route("/app/modification/informations", name="modification_informations")
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
     * @Route("/app/modification/informations/patch", name="modification_informations_patch")
     * @Template()
     */
    public function patchModificationInformations(Request $request)
    {
        $inputData = $request->request->all();
        $uploadedFile = $request->files->get('file');

        if ($uploadedFile) {

            $user = $this->getUser();
            $profile = $this->findAuth->getUserByEmail($user->getEmail());
            $dir = $this->getParameter("UPLOADS_DIR_PICTURE") . $profile['id'] . '/imgprofile';


            $filename = $uploadedFile->getClientOriginalName();
            // exit(var_dump($dir));
            return $this->saveFile($uploadedFile, $dir);
        

            // Déplacez le fichier vers le répertoire de destination
            $destination = 'https://folklore-is-not-dead.com/uploads/';
            $uploadedFile->move($destination, $filename);
    
            // Effectuez les opérations nécessaires avec le fichier téléchargé
            // ...
        }else{
            exit(var_dump("image non détectée"));
        }

        exit(var_dump($uploadedFile));

        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());

        $profile = $this->findAuth->patchUser($user, $profile['id'], $inputData);


        // exit(var_dump($profile));

        
        return $this->redirectToRoute('modification_informations');
    }


}
