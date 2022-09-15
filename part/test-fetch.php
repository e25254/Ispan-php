<?php

$db_host = 'localhost';
$db_name = 'project57old';
$db_user = 'root';
$db_psw = '';

$dsn = "mysql:host={$db_host};
    dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>
    PDO::FETCH_ASSOC
];