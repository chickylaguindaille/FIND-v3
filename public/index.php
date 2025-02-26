<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// Définition de l'environnement et du mode debug
$env = getenv('APP_ENV') ?: 'dev';
exit(var_dump($env));
$debug = (bool) (getenv('APP_DEBUG') ?: ('prod' !== $env));

// En local, charger .env si le fichier existe
if ($env === 'dev' && file_exists(dirname(__DIR__).'/.env')) {
    (new Dotenv())->load(dirname(__DIR__).'/.env');
}

return function (array $context) use ($env, $debug) {
    return new Kernel($env, $debug);
};
