<?php

//Задание 1 ======================================

header('Content-type: text/plain; charset=utf8');
$result=0;
$array = array(1, 2, 3, 4, 5);
foreach ($array as &$value) {
$result = $result+$value*$value;
}
echo 'Сумма квадратов : '. '"'.$result . '"'. "\n";
echo '============' . "\n";


//Задание 2 ======================================

$array2=array(
  'Коля'=>'200',
  'Вася'=>'300',
  'Петя'=>'400'
);
foreach ($array2 as $key=>$value2){
    echo $key . ' - зарплата ' . $value2 . ' долларов'. "\n";
}
echo '============' . "\n". "\n";


//Задание 3 ======================================

$arr = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];
$day = 2;

foreach ($arr as $key=>$dayOfTheWeek) {
    if ($key == $day) {
        echo '"'.$dayOfTheWeek.'"' . "\n";
    } else {
        echo $dayOfTheWeek. "\n";
    }
}
echo  "\n".'============' . "\n". "\n";


//Задание 4 ======================================

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    $en[] = $key;
    $ru[] = $elem;
}

var_dump($en);
var_dump($ru);


