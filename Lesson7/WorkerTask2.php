<?php
header('Content-Type: text/plain; charset=utf-8');

class WorkerTask2
{
 private $name;
 private $age;
 private $salary;

 public function getName()
    {
        return $this->name;
    }
 public function setName($name): void
    {
        $this->name = $name;
    }
public function getAge()
    {
        return $this->age;
    }
public function setAge($age): void
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
private function checkAge($age)
{
    if ($age< 100) {
        return true;
    } else {
        return false;
    }
}
public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}
$worker = new WorkerTask2();
$worker->setName('Ivan');
$worker ->setAge(25);
$worker -> setSalary(1000);

$worker1 = new WorkerTask2();
$worker1->setName('Vasia');
$worker1 ->setAge(26);
$worker1 -> setSalary(2000);

echo 'Name :' . $worker->getName() . "\n";
echo 'Age :' . $worker->getAge() . "\n";
echo 'Salary :' . $worker->getSalary() . "\n";

echo 'Name :' . $worker1->getName() . "\n";
echo 'Age :' . $worker1->getAge() . "\n";
echo 'Salary :' . $worker1->getSalary() . "\n";

echo 'Sum age : ', $worker->getAge() + $worker1->getAge() . "\n";
echo 'Sum salary : ', $worker->getSalary() + $worker1->getSalary() . "\n";

