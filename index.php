

<?php

header('Content-type: text/plain; charset=utf8');

ini_set('display_errors', true);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';
$kernel = new \App\KernelSessions();
$kernel->run();