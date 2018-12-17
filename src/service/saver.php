<?php


namespace App\service;


use App\storage\StorageInterface;

class saver
{
    private $storage;
    public function __construct(StorageInterface $storage)
    {$this->storage=$storage;

    }
public function doIt(){
        $this->storage->save('Data for saving');
}
}