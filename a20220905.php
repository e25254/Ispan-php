<?php

$a = '21';
$b = '3';
$c = 'c';

echo ($a + $b). '<br>'; #字串串接用 .
echo ($a + intval($c)).'<br>';
// echo ($a + $c). '<br>';

echo '-'. '<br>';
#輸出在頁面的時候不要直接輸出布林值
echo False. '<br>'; #輸出會變成空字串
echo true. '<br>' ; #輸出會變 1
echo '='. '<br>';



$name = 'shin';
echo "HELLO $name <br>";
echo 'HELLO $name <br>';

echo "HELLO {$name} 123 <br>";
echo "HELLO ${name} 123 <br>";

echo "HELLO
    ${name}123
    <br>";


for ($i = 0 ; $i < 20 ; $i++ ){
    $k = $i % 4;
    echo "$k<br>";
};


