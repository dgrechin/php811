<?php


namespace App;


use App\service\Mailer;
use App\service\saver;
use App\storage\DataBase;
use App\storage\file;

class Kernel
{

    public function run()
    {

        if(empty($_COOKIE['visits'])){
            $_COOKIE['visits']=0;
        }
        $_COOKIE['visits']++;
        setcookie('visits' ,$_COOKIE['visits'] ,strtotime('+ day'));
        echo 'Вы открыли страницу :' . $_COOKIE['visits'].' раз' ;
    }
}



