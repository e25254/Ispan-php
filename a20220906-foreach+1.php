<pre>
    <?php

    $ar5 = [
        'a' => 10,
        'b' => 20,
        'c' => 30,
        'd' => 40,
    ];
    
    print_r($ar5);
    
    foreach($ar5 as $k=> &$v){
        $v++;
    }

    print_r($ar5);


    ?>
</pre>