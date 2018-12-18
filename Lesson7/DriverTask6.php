<?php
header('Content-Type: text/plain; charset=utf-8');
require __DIR__. '\StudentTask5.php';

class DriverTask6 extends StudentTask5
{
private $drivingExp;
private $drivingCat;

function getDrivingExp()
    {
        return $this->drivingExp;
    }

    public function setDrivingExp($drivingExp): void
    {
        $this->drivingExp = $drivingExp;
    }

    public function getDrivingCat()
    {
        return $this->drivingCat;
    }

    public function setDrivingCat($drivingCat): void
    {
        $this->drivingCat = $drivingCat;
    }
    public function __construct($name,$age,$salary,$class,$scholarship,$drivingExp,$drivingCat)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
        $this->class = $class;
        $this->scholarship = $scholarship;
        $this->drivingExp = $drivingExp;
        $this->drivingCat = $drivingCat;
    }
}
$driver = new DriverTask6('Fred' , 45,1500,5,2500,'15 years',"B" );
$driver1 = new DriverTask6('Antony' , 25,1000,2,1200,'5 years',"A" );


echo 'Name : '.$driver->getName()."\n".'Age : ' .$driver->getAge()."\n".'Salary : '.$driver->getSalary()."\n".
    'Class : '.$driver->getClass()."\n".'Scholarship : ' .$driver->getScholarship()."\n".'Driving Experience : '.$driver->getDrivingExp().
    "\n".'Driving Category : '.$driver->getDrivingCat()."\n"."\n";

echo 'Name : '.$driver1->getName()."\n".'Age : ' .$driver1->getAge()."\n".'Salary : '.$driver1->getSalary()."\n".
    'Class : '.$driver1->getClass()."\n".'Scholarship : ' .$driver1->getScholarship()."\n".'Driving Experience : '.$driver1->getDrivingExp().
    "\n".'Driving Category : '.$driver1->getDrivingCat();
