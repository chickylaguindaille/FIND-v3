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

class RevisionsController extends AbstractController
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
     * @Route("/app/revisions/circulaire", name="circulaire")
     * @Template()
     */
    public function quizz(Request $request)
    {
        $data['page'] = "Quizz Circulaire";
        $user = $this->getUser();
        $profile = $this->findAuth->getUserByEmail($user->getEmail());
        $data['profile'] = $profile;

        $color = file_get_contents('color.json');
        $study = file_get_contents('study.json');

        $color = json_decode($color, true);
        $study = json_decode($study, true);

        $color = $color['color'];
        $study = $study['study_fr'];

        $indexes = array_rand($color, 5);

        foreach ($indexes as $index) {
            $answer[] = $color[$index];
        }

        shuffle($answer);

        // exit(var_dump($answer));

        foreach ($answer as &$ans) {
            // $answer['data'] = $color[$index];

            // exit(var_dump($ans['data']));

            // Tableau pour stocker les 3 valeurs aléatoires
            $valeursAleatoires = [];

            // Générer 3 valeurs aléatoires uniques et les ajouter au tableau
            while (count($valeursAleatoires) < 3) {
                $valeur = rand(26, 48);
                if (!in_array($valeur, $valeursAleatoires) && $valeur !== $ans['data']) {
                    $valeursAleatoires[] = $valeur;
                }
            }
            // exit(var_dump($valeursAleatoires));
            $ans['data'] = array_merge($ans['data'], $valeursAleatoires);
            shuffle($ans['data'] );
            exit(var_dump($ans['data']));

        }

        $data['answer'] = $answer;
        $data['study'] = $study;

        // exit(var_dump($data['answer']));




        return $this->render('revisions/quizz.html.twig', $data);
    }

}
    
    
?>