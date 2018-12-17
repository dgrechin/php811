<?php
header('Content-Type: text/plain; charset=utf-8');
class WorkerTask5 extends UserTask5
{
private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}

$worker = new WorkerTask5();
$worker->setName('Ivan');
$worker ->setAge(25);
$worker -> setSalary(1000);

$worker = new WorkerTask5();
$worker->setName('Vasia');
$worker ->setAge(26);
$worker -> setSalary(2000);

echo 'Sum salary : ', $worker->getSalary() + $worker1->getSalary() . "\n";