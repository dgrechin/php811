<?php


namespace App;

header('Content-type: text/plain; charset=utf8');
use App\service\Mailer;
use App\service\saver;
use App\storage\DataBase;
use App\storage\file;

class Counter
{

    public function run()
    {
        session_start();
        if(empty($_SESSION['visits'])){
            echo 'Вы еще не посещали эту страницу'."\n";
            $_SESSION['visits']=0;
        }
        $_SESSION['visits']++;
        echo 'Вы посетили страницу : ' . $_SESSION['visits'] . ' раз';

    }
}



