<?php

// #要在網址最後打 ?a=100&b=3
// echo $_GET['a'] + $_GET['b'];


# isset(): 有沒有設定
$a = isset($_GET['a']) ? intval($_GET['a']) : 0 ;

# empty(): 是不是空的 : 0 , '' , null , undefinded , []
$b = empty($_GET['b']) ? 0 : intval($_GET['b']) ;

echo $a + $b ;