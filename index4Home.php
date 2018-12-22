<?php


require_once __DIR__ . '/vendor/autoload.php';

use App\service\Mailer;
use App\service\saver;
use App\storage\DataBase;
use App\storage\file;







class testSession
{

    public function runTest()
    {
        session_start();
        echo "Введите Вашу страну : " .'<input type="text">';

    }
}




