<?php
header('Content-Type: text/plain; charset=utf-8');
require __DIR__. '\UserTask5.php';
class WorkerTask5 extends UserTask5
{
protected $salary;

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

$worker1 = new WorkerTask5();
$worker1->setName('Vasia');
$worker1 ->setAge(26);
$worker1 -> setSalary(2000);

echo 'Sum salary : ', $worker->getSalary() + $worker1->getSalary() . "\n". "\n". "\n" . 'NEXT TASK : '."\n"."\n";