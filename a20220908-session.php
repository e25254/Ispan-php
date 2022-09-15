<?php
    
    session_start(); // 啟用session

    // if(! isset($_SESSION['test'])){
    //     $_SESSION['test'] = 0;
    // }
    // $_SESSION['test']++;

    $_SESSION['你好'] = "<h2>Hello</h2>";

    echo $_SESSION['你好']

?>