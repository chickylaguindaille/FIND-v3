<?php

namespace App\Security;

use App\Security\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use App\Service\FindSecureApiService;
use App\Service\FindAuthService;

class UserProvider implements UserProviderInterface, PasswordUpgraderInterface
{
    const JWT_TOKEN_PARTS_COUNT = 3;
    const TOKEN_REFRESH_DELAY = 120;

    protected $findAuthService;

    private $logger;

    public function __construct(LoggerInterface $logger,
    FindAuthService $findAuthService)
    {
        $this->findAuthService = $findAuthService;
        $this->logger = $logger;
    }

    public function getPayloadForToken($token)
    {
        $this->logger->debug("TokeUserProvidernUserProvider::getPayloadForToken --> token = ".$token);
        try 
        {
            $tokenParts = explode('.', $token);
            
            if (self::JWT_TOKEN_PARTS_COUNT !== count($tokenParts)) 
            {
                exit(var_dump('problem token format'));
                throw new AuthenticationException('TOKEN Wrong Auth Token format');
            }

            $payload = json_decode(base64_decode($tokenParts[1]), true);
            // exit(var_dump("getpayloadfortoken"));
            // exit(var_dump($payload));
            if (!isset($payload['username'])) {
                exit(var_dump('problem token username'));
                throw new AuthenticationException('TOKEN No Username found in the Auth Token');
            }

            

            if (!isset($payload['exp'])) {
                exit(var_dump('problem token expiration'));
                throw new AuthenticationException('TOKEN No expiration timestamp found in the Auth Token');
            }

            $exp = $payload['exp'];
            // exit(var_dump($exp));

            if ($exp + (int) self::TOKEN_REFRESH_DELAY <= time()) {
                throw new AuthenticationException('TOKEN Expired');
            }
            // exit(var_dump("ici"));

            $this->logger->debug("UserProvider::getUsernameForToken --> payload = ".json_encode($payload));

            return $payload;

        } catch (\Exception $ex) {
            throw new CustomUserMessageAuthenticationException('You have been disconnected, try to reconnect.');
        }
    }

    /**
     * loadUserByToken
     *
     * @param mixed $payload
     * @access private
     * @return
     */
    private function loadUserByToken($token,$payload)
    {
        $this->logger->debug("TokenUserProvider::loadUserByToken --> payload=".json_encode($payload));

        $user = new User();
        $user->initializeUser($payload['username'], $token, $payload);

        //$this->logger->debug("TokenUserProvider::loadUserByToken --> user = ".json_encode($user->serialize()));

        return $user;
    }

    public function getUserForToken($token)
    {
        // exit(var_dump("getuserfortoken"));
        $payload = $this->getPayloadForToken($token);
        // exit(var_dump("getuserfortoken"));
        // exit(var_dump($payload));
        $user = $this->loadUserByToken($token, $payload);
        // exit(var_dump($user));
        return $user;
    }

    /**
     * Symfony calls this method if you use features like switch_user
     * or remember_me.
     *
     * If you're not using these features, you do not need to implement
     * this method.
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username, $payload = [])
    {
        $this->logger->debug("UserProvider::loadUserByUsername --> username = ".$username." payload=".json_encode($payload));

        if ($payload) {
            return $this->loadUserByPayload($payload);
        }

        // Load a User object from your data source or throw UsernameNotFoundException.
        // The $username argument may not actually be a username:
        // it is whatever value is being returned by the getUsername()
        // method in your User class.
        //throw new \Exception('TODO: fill in loadUserByUsername() inside '.__FILE__);

        // $result = $this->findSecureApiService->findByUsername($username);

        if (count($result['Users']) === 0) {
            throw new UsernameNotFoundException();
        }

        $user = new User();
        $user->setEmail($username);

        return $user;
    }

    /**
     * Refreshes the user after being reloaded from the session.
     *
     * When a user is logged in, at the beginning of each request, the
     * User object is loaded from the session and then this method is
     * called. Your job is to make sure the user's data is still fresh by,
     * for example, re-querying for fresh User data.
     *
     * If your firewall is "stateless: true" (for a pure API), this
     * method is not called.
     *
     * @return UserInterface
     */
    public function refreshUser(UserInterface $user)
    {
        $this->logger->debug("UserProvider::refreshUser start");
        if ($user==null)
            $this->logger->debug("UserProvider::refreshUser user is null");

        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        //exit(var_dump($user));
        if ($user->getExp() <= time() && isset($_COOKIE['refreshToken']))
        {
            $response = $this->findAuthService->refreshToken($_COOKIE['refreshToken']);
            //exit(var_dump($response));
            if (array_key_exists("token",$response))
            {                
                $this->logger->debug("UserProvider::refreshUser user updated");

                $token = $response['token'];
                $user->setToken($token);
                $user->setPayload($this->getPayloadForToken($token));
                $expiration = strtotime('+7 days');
                setcookie('refreshToken', $response['refreshToken'], $expiration);

            } else throw new AuthenticationException();
        }

        // Return a User object after making sure its data is "fresh".
        // Or throw a UsernameNotFoundException if the user no longer exists.
        //throw new \Exception('TODO: fill in refreshUser() inside '.__FILE__);
        //return $this->loadUserByUsername($user->getEmail());
        return $user;
    }

    /**
     * Tells Symfony to use this provider for this User class.
     */
    public function supportsClass($class)
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }

    /**
     * Upgrades the encoded password of a user, typically for using a better hash algorithm.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        // TODO: when encoded passwords are in use, this method should:
        // 1. persist the new password in the user storage
        // 2. update the $user object with $user->setPassword($newEncodedPassword);
    }
}