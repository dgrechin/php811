<?php
header('Content-Type: text/plain; charset=utf-8');
class WorkerTask3
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name,$salary,$age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getAge()
    {
        return $this->age;
    }

}
$worker= new WorkerTask3('Fred' . "\n", 1500 . "\n",25);
echo 'Name :' .  $worker->getName();
echo 'Salary :' .  $worker->getSalary();
echo 'Age :' .  $worker->getAge();