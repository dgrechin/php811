<?php
header('Content-type: text/plain; charset=utf8');


echo  'Задание №2 : '.preg_replace('#a..a#','!','aba aca aea abba adca abea'). "\n";

echo  'Задание №5 : '.preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea'). "\n";

echo  'Задание №9 : '.preg_replace('#2\+3#', '!', '2+3 223 2223'). "\n";

echo  'Задание №14 : '.preg_replace('#a.+?a#','!','aba accca azzza wwwwa'). "\n";

echo  'Задание №5 , глава 2 : '.preg_replace('#a\d+a#' , '!', 'a1a a22a a333a a4444a a55555a aba aca'). "\n";

echo  'Задание №5 , глава 2 : '.preg_replace('#a\Wb#' , '!', 'ave a#b a2b a$b a4b a5b a-b acb'). "\n";

echo  'Задание №19 , глава 2 : '.preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa'). "\n";