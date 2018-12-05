<?php
header('Content-type: text/plain; charset=utf8');


$i=2;
$r=$i;

while($r<100){

echo 'R: '. $r . "\n";
    $r*=$i;
}

echo "++++++++++++++\n";
do{
   echo 'R: '. $r , "\n";
   $r/=2;
}
while($r>0.1);