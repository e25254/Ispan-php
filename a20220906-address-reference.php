<pre>
    <?php

        $ar1 = [1, 2, 3];

        $ar2 = &$ar1; // 設定位址

        array_pop($ar2);

        print_r($ar1);

        $a = 10;
        $b = &$a;
        $b = 77;
        echo $a; //a 會等於77


    ?>
</pre>