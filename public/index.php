<?php

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__).'/vendor/autoload.php';

$request = Request::createFromGlobals();
$request->server->set('BASE', '/FIND-v3/public');

$kernel = new Kernel($request->server->get('APP_ENV', 'dev'), $request->server->get('APP_DEBUG', true));

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
