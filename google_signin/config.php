<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('834247635948-pu5dhgj9cgabho30opnnfi2biotiio49.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('VlNJnw9P-ZEg4Kvhr-yeFG33');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/myprojects/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page


?>