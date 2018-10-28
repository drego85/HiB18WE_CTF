<?php
error_reporting(0);
ini_set("display_errors", 0);
date_default_timezone_set("Europe/Rome");

$indicesServer = array(
    'argv',
    'argc',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'SERVER_NAME',
    'SERVER_SOFTWARE',
    'SERVER_PROTOCOL',
    'QUERY_STRING',
    'DOCUMENT_ROOT',
    'HTTP_ACCEPT',
    'HTTP_ACCEPT_CHARSET',
    'HTTP_ACCEPT_ENCODING',
    'HTTP_ACCEPT_LANGUAGE',
    'HTTP_CONNECTION',
    'HTTP_HOST',
    'HTTP_USER_AGENT',
    'HTTPS',
    'REMOTE_ADDR',
    'REMOTE_HOST',
    'REMOTE_USER',
    'REDIRECT_REMOTE_USER',
    'SERVER_ADMIN',
    'SERVER_PORT',
    'SERVER_SIGNATURE',
    'PATH_TRANSLATED',
    'PHP_AUTH_DIGEST',
    'PHP_AUTH_USER',
    'PHP_AUTH_PW',
    'AUTH_TYPE',
    'PATH_INFO',
    'ORIG_PATH_INFO',
    'HTTP_CLIENT_IP',
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_X_CLUSTER_CLIENT_IP',
    'HTTP_FORWARDED_FOR');


$user = "";

foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        $user .= $arg . $_SERVER[$arg];
        // echo $arg . $_SERVER[$arg];
    } else {
        $user .= $arg;
    }
}


$userhash = hash("sha1", $user);

$file = "7DNMeHUYnM.txt";
$current = file_get_contents($file);
$current .= date("Y-m-d h:i:sa") . "\t" . $_SERVER['PHP_SELF'] . "\t" . $userhash . "\n";
file_put_contents($file, $current);

?>
