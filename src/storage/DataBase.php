<?php


namespace App\storage;


class DataBase implements StorageInterface
{

    public function save($data)
    {
        echo 'Saving with data_base: '. $data .'<br>';
    }
}