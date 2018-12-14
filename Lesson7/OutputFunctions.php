<?php
define('DATA_FILE_NAME', 'users.txt');
function openUser ($values){
    $file = fopen(DATA_FILE_NAME, 'r');
    while(!feof($file)){
        $open[]=fgets($file);
        fgets($file ,explode("\t", $values)."\n");
        fclose($file);
        echo $open;
    }
}
include 'OutputHtmlPhp.php';