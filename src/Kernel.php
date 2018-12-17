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
        $mailer= new Mailer();
        $mailer->send('test@test.com');

        $database = new DataBase();
        $files = new file();

        $databaseSaver = new saver($database);
        $filesSaver = new saver($files);

        $databaseSaver-> doIt();
        $filesSaver ->  doIt();
    }


}