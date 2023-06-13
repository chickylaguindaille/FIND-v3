<?php

namespace App\Service;

use Firebase\JWT\JWT;


class FindAuthService extends FindService
{
    public function registerUser($credentials)
    {
        $credentials['enabled'] = true;
        $credentials['roles'] = array("ROLE_USER");

        if (array_key_exists('password', $credentials))
            $credentials['plain_password'] = $credentials['password'];

        if (array_key_exists('username', $credentials) == false && array_key_exists('email', $credentials))
            $credentials['username'] = $credentials['email'];

        $response = $this->request(null, 'POST', 'register', $credentials);

        exit(var_dump($response));

        return $response;
    }

    public function loginCheck($username, $password, $request = null)
    {
        $url = 'login_check';

        $data = [
            '_username' => $username,
            '_password' => $password,
        ];

        $response = $this->request(null, 'POST', $url, $data, 'form_params');

        if ($request != null)
            $this->logger->notice("FindAuthService::loginCheck --> user = " . $username . " | ip = " . $request->getClientIp() . " | useragent = " . $request->headers->get('User-Agent') . " | cookie = " . json_encode($request->cookies->all()));
        $this->logger->notice("FindAuthService::loginCheck --> received response : " . json_encode($response));


        if ($response != null && $response['code'] == 200) {
            // Génération du token
            $payload = [
                'username' => $username,
                'exp' => time() + 3600,
                // Ajoutez d'autres données personnalisées au payload si nécessaire
            ];
            $secretKey = 'test'; // Remplacez par votre propre clé secrète
            $algorithm = 'HS256'; // Choisissez l'algorithme de votre choix (par exemple, HS256)
            $token = JWT::encode($payload, $secretKey, $algorithm);
            // Ajoutez le token à la réponse
            $response['token'] = $token;
        }
    

        return $response;
    }

    public function oauthLogin($provider, $email, $userId)
    {
        $this->logger->debug("FindAppService::oauthLogin --> email = " . $email);

        $data = [
            'email' => $email,
            'provider' => $provider,
            'userId' => $userId
        ];

        $response = $this->request(null, 'POST', "oauth/login", $data);

        return $response;
    }

    public function oauthLoginApp($email,$request=null)
    {
        $this->logger->debug("FindAuthService::oauthLogin --> email = ".$email);

        $url = 'oauth/login';

        $data = [
            'email' => $email
        ];

        $response = $this->request(null,'POST',$url,$data,'form_params');

        if ($request!=null)
            $this->logger->notice("FindAuthService::oauthLogin --> email = ".$email." | ip = ".$request->getClientIp()." | useragent = ". $request->headers->get('User-Agent'). " | cookie = ".json_encode($request->cookies->all()));

        return $response;
    }

    public function getConfirmationToken($uid)
    {
        // exit(var_dump("getConfirmationToken"));

            // Génération du token
            $payload = [
                'id' => $uid,
                'exp' => time() + 3600,
                // Ajoutez d'autres données personnalisées au payload si nécessaire
            ];
            $secretKey = 'test'; // Remplacez par votre propre clé secrète
            $algorithm = 'HS256'; // Choisissez l'algorithme de votre choix (par exemple, HS256)
            $token = JWT::encode($payload, $secretKey, $algorithm);
            // Ajoutez le token à la réponse
            $response = $token;

        // $response = $this->request(null, 'GET', "user/" . $uid . "/confirm/token");
        return $response;

    }

    public function confirmUserToken($token)
    {
        $response = $this->request(null, "GET", "confirm/" . $token);

        return $response;
    }

    public function getUserByEmail($email)
    {
        $response = $this->request(null, "GET", "api/users/email/" . $email);

        return $response;
    }

    public function refreshToken($refreshToken,$request=null)
    {
        $url = 'token/refresh';

        $data = [
                    'refreshToken' => $refreshToken
                ];
                
        $response = $this->request(null,'POST',$url,$data,'form_params');

        if ($request!=null)
        {
        $this->logger->notice("FindAuthService::refreshToken --> token = ".$refreshToken." | ip = ".$request->getClientIp()." | useragent = ". $request->headers->get('User-Agent'). " | cookie = ".json_encode($request->cookies->all()));
            $this->logger->notice("FindAuthService::refreshToken --> received response : ".json_encode($response));
        }

        return $response;
    }



    //------------------------------------------------------------------------------------------------
    // Users
    //------------------------------------------------------------------------------------------------
    // public function listUsersStudizz($user)
    // {
    //     return $this->request($user->getToken(), 'GET', 'secure/auth/users');
    // }

    public function createUser($user, $data)
    {
        // exit(var_dump($data));
        // $response = $this->request(null, 'POST', $url, $data, 'form_params');

        // exit(var_dump($this->request($user, 'POST', 'api/users', $data)));
        // return $this->request('GET', 'api/users', $data);
        return $this->request($user, 'POST', 'api/users', $data);
    }

    public function getUser($user, $userId)
    {
        return $this->request($user->getToken(), 'GET', 'api/users/' . $userId);

    }

    public function patchUser($user, $userId, $data)
    {
        return $this->request($user, 'PATCH', 'api/users/' . $userId , $data);
    }

    public function getRoles($user)
    {
        return $this->request($user->getToken(), 'GET', 'secure/auth/roles');
    }

    public function updateRoles($user, $userId, $roles)
    {
        return $this->request($user->getToken(), 'PUT', 'secure/auth/users/' . $userId . '/roles', $roles);
    }

    public function enableUser($user, $userId)
    {
        return $this->request($user->getToken(), 'PUT', 'secure/auth/users/' . $userId . '/enable');
    }

    public function disableUser($user, $userId)
    {
        return $this->request($user->getToken(), 'PUT', 'secure/auth/users/' . $userId . '/disable');
    }

    // public function generatePassWord($user)
    // {
    //     return $this->request($user->getToken(), 'GET', 'secure/auth/password/generate');
    // }

    public function updatePassword($user, $data)
    {
        return $this->request($user->getToken(), 'PUT', 'secure/auth/users/' . $data['id'] . '/password/change', $data);
    }

    public function updateUserInfos($user, $userId, $data)
    {
        return $this->request($user->getToken(), 'PUT', 'secure/users/' . $userId, $data);
    }
}