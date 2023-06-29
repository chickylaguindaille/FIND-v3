<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
// use App\Services\RecaptchaService;
use Symfony\Component\HttpFoundation\JsonResponse;

use Psr\Log\LoggerInterface;
use App\Service\FindAuthService;
use App\Security\UserProvider;

class SecurityController extends BaseController
{
    // private $recaptchaService;
    private $findAuth;


    public function __construct(LoggerInterface $logger, FindAuthService $findAuth)
    {
        parent::__construct($logger);
        // $this->recaptchaService = $recaptchaService;
        $this->logger = $logger;
		$this->findAuth = $findAuth;
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $user = $this->getUser();
        if (isset($user)){
            return $this->redirectToRoute('accueil');
        }else{
            $data= array();
            // $response['message'];
            // $data['errorMsg'] = "test";
            // $data['errorMsg'] = $request->get('email');

        return $this->render('security/login.html.twig', ['page' => "login",'last_username' => $lastUsername, 'error' => $error, 'confirmSuccess' => $request->get('confirmSuccess')]);

        }
    }

    /**
     * @Route("/app/subscribe", name="subscribe")
     */
    public function subscribe(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        $data = array();
        $error = $request->get('error');
        $data['error'] = $error;

        return $this->render('security/subscribe.html.twig', $data);

    }

    /**
     * @Route("/app/subscribe/validation", name="subscribe_validation")
     */
    public function subscribeValidation(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        $data = array();

        return $this->render('security/subscribevalidation.html.twig', $data);

    }

    /**
     * @Route("/app/logout", name="logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    


    // /**
    //  * @Route("/app/homepage", name="homepage")
    //  */
    // public function homepage(Request $request)
    // {
    //     // exit(var_dump("hey"));
    //     return $this->render('homepage.html.twig');
    // }














    /**
     * @Route("/app/auth/subscribe", name="auth_ajax_subscribe")
     */
    public function ajaxSubscribe(Request $request)
    {
        
        // $credentials = json_decode($request->getContent(), true);

        $credentials = [
            'firstname' => $request->request->get('firstname'),
            'lastname' => $request->request->get('lastname'),
            'username' => $request->request->get('nickname'),
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
        ];
        
        // if ($this->recaptchaService->verifyCaptcha($credentials['captcha']) == false) {
        //     return new JsonResponse(['code' => 401, 'message' => 'spam']);
        // }

        $userVerif = $this->findAuth->getUserByEmail($credentials['email']);

        // exit(var_dump($userVerif));

        if (!array_key_exists('code', $userVerif)) {
            // exit(var_dump("ici"));
            $data['error'] = "L'adresse email est déjà utilisée";
            return $this->redirectToRoute('subscribe', $data);
            // return new JsonResponse(['code' => 400, 'message' => 'User already exists']);
        }
        // exit(var_dump("nop"));
        $response = $this->findAuth->createUser(null, $credentials);

        $profile = [];
        if (array_key_exists("code", $response))
            return new JsonResponse($response);
        else {
            $profile['uid'] = $response['id'];
            $profile['email'] = $credentials['email'];
            // exit(var_dump($profile));
            $token = $this->findAuth->getConfirmationToken($profile['uid']);
            $data['token'] = $token;
            $response = $this->findAuth->patchUser(null, $profile['uid'], $data);
        }

        return $this->redirectToRoute('subscribe_validation');

        // if ($credentials['firstname'] !== null && strlen(trim($credentials['firstname'])) > 1) {
        //     $profile['firstname'] = $credentials['firstname'];
        // }

        // if ($credentials['lastname'] !== null && strlen(trim($credentials['lastname'])) > 1) {
        //     $profile['lastname'] = $credentials['lastname'];
        // }

        // if (array_key_exists('firstname', $profile) || array_key_exists('lastname', $profile)) {
        //     $this->profileService->createProfile($profile);
        // }

        //Si le user est créé il faut envoyer un email pour validation de l'email avant de l'enregistrer

        // if (!is_array($token)) {
        //     // exit(var_dump($token));
        //     // $this->logger->debug("SecurityController::ajaxSubscribe --> token = " . $token);
        //     $data = [];

        //     if ($credentials['firstname'] !== null && strlen(trim($credentials['firstname'])) > 1) {
        //         $data['firstname'] = $credentials['firstname'];
        //     }
        //     $data['token'] = $token;

        //     $subject = "Création de compte Folklore Is Not Dead";
        //     $emails = [$credentials['email']];

        //     $htmlPart = $this->renderView('email/confirm-account-email.html.twig', $data);

        //     $response = $this->studizzApp->sendEmail($subject, $htmlPart, $htmlPart, $emails);

        //     if (array_key_exists("code", $response) && ($response['code']!=200))
        //         return new JsonResponse($response);

        // } else {
        //     $this->logger->debug("SecurityController::ajaxSubscribe --> token is array = " . json_encode($token));

        //     if (count($token) == 0)
        //         return new JsonResponse(array("code" => 500, "message" => "Une erreur serveur c'est produite"));

        //     return new JsonResponse($token);
        // }


        //Envoyer le mail avec le token de confirmation.


        //Puis avec le lien dans le mail retrouver le user pour le confirmer :
        //$this->studizzAuth->confirmUserToken($token);
        // return $this->redirectToRoute('login');

        return new JsonResponse(array("code" => 200, "data" => $profile));


    }


    /**
     * @Route("/app/forgot/password", name="forgot_password")
     */
    public function forgotPassword(Request $request)
    {
        return $this->render('security/forgotpassword.html.twig');
    }

    /**
     * @Route("/app/forgot/password/request", name="send_reset_request_password")
     */
    public function sendRequestResetPassword(Request $request)
    {
        $email = $request->get('email');
        $inputData = $request->request->all();
        exit(var_dump($email));
        // return $this->render('forgotpassword.html.twig');
    }

}
