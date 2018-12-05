

<?php

header('Content-type: text/plain; charset=utf8');

$salary=[
    'IVAN' =>  3000,
    'VICTOR' =>  2000,
    'SVETA' =>  2500,
];
    foreach ( $salary as $name => $value)
{
    echo $name . ' получает '. $value , "\n";
}
echo "==========================\n";


 $a=['MO','Tu','St','Ty','Fr','Sa','Su'];
foreach ($a as $item)
{
    echo 'День:'. $item . "\n";
}




