<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 20:38
 */

namespace App\storage;


interface StorageInterface
{
    public function save($data);

}