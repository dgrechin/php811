<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 20:45
 */

namespace App\storage;


class file implements StorageInterface
{
    public function save($data) {
        echo 'Saving in files:   ' . $data . '<br>';
    }
}