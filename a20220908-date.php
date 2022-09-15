<?php

// echo date("Y-m-d H:i:s") ."<br>";

echo date("Y-m-d H:i:s") ."<br>";

echo date("Y-m-d H:i:s", time()) ."<br>";
echo date("Y-m-d H:i:s", time()+30*24*60*60) ."<br>";

$t1 = strtotime('2022-09-08 14:00:00'); // timestamp
$t2 = strtotime('2022/09/08 14:00:00'); // timestamp
echo date("Y-m-d H:i:s", $t2) ."<br>";

?>