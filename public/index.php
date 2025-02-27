<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

// Vérifie si on est en production (défini par le serveur)
$env = getenv('APP_ENV');

if (!$env) {
    // Si aucune variable d'environnement, charge le fichier .env (LOCAL UNIQUEMENT)
    if (file_exists(dirname(__DIR__).'/.env')) {
        (new Dotenv())->load(dirname(__DIR__).'/.env');
    }
    $env = getenv('APP_ENV') ?: 'dev';
}

// Mode debug activé sauf si APP_ENV=prod
$debug = (bool) (getenv('APP_DEBUG') ?: ('prod' !== $env));

if ($debug) {
    umask(0000);
    Symfony\Component\ErrorHandler\Debug::enable();
}

// Configuration des proxys et hôtes de confiance
if ($trustedProxies = getenv('TRUSTED_PROXIES')) {
    Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if ($trustedHosts = getenv('TRUSTED_HOSTS')) {
    Request::setTrustedHosts(explode(',', $trustedHosts));
}

// Initialisation du Kernel
$kernel = new Kernel($env, $debug);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
