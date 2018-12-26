<?php


header('Content-type: text/plain; charset=utf8');

ini_set('display_errors', true);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';
$cookie = new \App\cookieHome();
$cookie->run();