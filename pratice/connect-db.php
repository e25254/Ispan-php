<?php

$db_host = 'localhost';
$db_name = 'project57old';
$db_user = 'root';
$db_psw = '';

// data source name (字串)
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

// 本身是陣列 array
$pdo_options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn , $db_user , $db_psw , $pdo_options);

if(! isset($_SESSION)){
    session_start();
}   

