<?php
require_once('vendor/autoload.php');

$google_client = new Google_Client();
$google_client->setClientId('29157927702-se2t2kf01ct4hiovmrgfv6u7imlp3c5o.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/google-login-php');
$google_client->addScope('email');
$google_client->addScope('profile');

session_start();
?>