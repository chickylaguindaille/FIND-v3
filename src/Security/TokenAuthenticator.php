<?php
namespace App\Security;

// use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Core\Security;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Firebase\JWT\JWT;

use App\Service\FindAuthService;
use App\Security\UserProvider;

class TokenAuthenticator extends AbstractGuardAuthenticator
{

	use TargetPathTrait;

    public const LOGIN_ROUTE = 'login';

    protected $logger;

    private $urlGenerator;
    private $csrfTokenManager;
    private $firstConnection = false;
	private $findAuthService;
    private $userProvider;

    public function __construct(UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrfTokenManager,  FindAuthService $findAuthService, LoggerInterface $logger, UserProvider $userProvider)
    {
        $this->logger = $logger;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
		$this->findAuthService = $findAuthService;
        $this->userProvider = $userProvider;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning `false` will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request): bool
    {
		// exit(var_dump("supports"));
        // return $request->headers->has('X-AUTH-TOKEN');

		return self::LOGIN_ROUTE === $request->attributes->get('_route')
		&& $request->isMethod('POST');
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    public function getCredentials(Request $request)
    {
		// exit(var_dump("credentials"));

		$credentials = [
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token'),
            'remember_me' => $request->request->get('_remember_me')
        ];

		// exit(var_dump($credentials));

        $firstConnection = $request->get('firstConnection');

        if ($firstConnection !== null && $firstConnection == 1) {
            $this->firstConnection = true;
        }

        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['email']
        );

        // exit(var_dump($credentials));

        $this->logger->notice("FindAuthService::loginCheck --> user = " . $credentials['email'] . " | ip = " . $request->getClientIp() . " | useragent = " . $request->headers->get('User-Agent') . " | cookie = " . json_encode($request->cookies->all()));
        return $credentials;

        // return $request->headers->get('X-AUTH-TOKEN');
    }

    public function getUser($credentials, UserProviderInterface $userProvider): ?UserInterface
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        // Load / create our user however you need.
        // You can do this by calling the user provider, or with custom logic here.
        //$user = $userProvider->loadUserByUsername($credentials['email']);
        //$response = $this->studizzApiFormationsService->checkCredentials($credentials['email'],$credentials['password']);
        $response = $this->findAuthService->loginCheck($credentials['email'], $credentials['password']);

        // exit(var_dump($response));

        if ($response != null && array_key_exists('token', $response)) {
            $user = $userProvider->getUserForToken($response['token']);
            // exit(var_dump($user));
            if (!is_null($credentials['remember_me']) && array_key_exists('refreshToken', $response)) {
                $expiration = strtotime('+7 days');
                setcookie('refreshToken', $response['refreshToken'], $expiration);
            }
        } /*if ($response['code']==200)
            $user = $userProvider->getUserForToken($response['data']['token']);
        */
        else //if (!$user)
        {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('Erreur d\'authentification', [$response['message']], $response['code']);
        }

        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user): bool
    {
		// exit(var_dump("checkcredentials"));
        // Check credentials - e.g. make sure the password is valid.
        // In case of an API token, no credential check is needed.

        // Return `true` to cause authentication success
        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey): ?Response
    {
        // exit(var_dump("success"));
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
		$email = $request->get('email');
        $user = $this->findAuthService->getUserByEmail($email);

        // exit(var_dump($response));

        // if (!array_key_exists('code', $user) && $user['isActive'] == false /*&& empty($token)*/) {
        //     $url = $this->urlGenerator->generate('app_activate_account');
        //     return new RedirectResponse($url . "?email=" . $user['email'] . "&uid=" . $user['id']);
        // }

        if ($request->hasSession()) {
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        }

        if ($request->getSession()->get('_security.main.target_path')) {
            // Redirigez l'utilisateur vers la page de succès de l'authentification
            exit(var_dump("ici"));
            return new RedirectResponse($request->getSession()->get('_security.main.target_path'));
        }
    

        $url = $this->getLoginUrl();
        return new RedirectResponse($url);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        $data = [
            // you might translate this message
            'message' => 'Authentication Required'
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe(): bool
    {
        return false;
    }

	protected function getLoginUrl()
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

}

?>