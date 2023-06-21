<?php


namespace App\Service;

use Google_Client;
use Google_Service_Drive;

$client = new Google_Client();
$client->setAuthConfig('config/google_drive_credentials.json');
$client->addScope(Google_Service_Drive::DRIVE_FILE);

$driveService = new Google_Service_Drive($client);
