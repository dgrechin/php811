<?php
define('DATA_FILE_NAME', 'users.txt');
function openUser ($values){
    $file = fopen(DATA_FILE_NAME, 'r');
    fgets($file ,explode("\t", $values)."\n");
    while(!feof($file)){
        $open[]=fgets($file);

        fclose($file);
        echo $open;
    }
}
include 'OutputHtmlPhp.php';