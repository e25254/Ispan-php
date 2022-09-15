<pre>
<?php

$a = 5 || 7;

var_dump($a);

$b = 5 or 7;

var_dump($b);

$c = 5 and 7;

var_dump($c);

# and or 優先權比 = 還低;
# 已經先執行  $b = 5 , $c = 5;

$d = ( 5 and 7 );
var_dump($d);


?>
</pre>