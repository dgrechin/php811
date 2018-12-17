
<?php
error_reporting(E_ALL);
ini_restore(E_ALL);
    require_once __DIR__. '/vendor/autoload.php';
    $kernel = new \App\Kernel();
    $kernel -> run ();