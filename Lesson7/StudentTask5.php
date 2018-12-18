<?php
header('Content-Type: text/plain; charset=utf-8');
require __DIR__. '\WorkerTask5.php';

class StudentTask5 extends WorkerTask5
{
protected $scholarship;
protected $class;

    public function getScholarship()
    {
        return $this->scholarship;
    }
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class): void
    {
        $this->class = $class;
    }
}