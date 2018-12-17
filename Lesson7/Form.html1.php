
<!DOCTYPE html>
<html lang="en">
<? include "WorkerTask1.php" ?>
<style>
    input {

        text-align: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Вывод</title>
</head>
<body>
    <form action="WorkerTask1.php">
        <label> Имя : <input type="text" name="name" disabled placeholder=" <? echo $worker->name ?>""></label><br><br>
        <label> Возраст : <input type="text" name="age" disabled placeholder=" <? echo $worker->age ?>""></label><br><br>
        <label> Зарплата : <input type="text" name="salary" disabled placeholder=" <? echo $worker->salary ?>""></label><br><br>

        <label> Сумма возрастов Ivan + Vasia : <input type="text" name="agesum" disabled
        placeholder=" <? echo $worker -> age  +  $worker1 -> age ?>""></label><br><br>
        <label> Сумма зарплат Ivan + Vasia : <input type="text" name="salarysum" disabled
        placeholder=" <? echo $worker -> salary  +  $worker1 -> salary ?>""></label><br><br>
    </form>
</body>
</html>