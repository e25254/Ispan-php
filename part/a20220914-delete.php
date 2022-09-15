<?php
require __DIR__ . '/a20220912-connect_db.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql = "DELETE FROM address_book WHERE sid={$sid}";

$connection->query($sql);

$come_from = 'basepagewithdel&edit.php';
if (!empty($_SERVER['HTTP_REFERER'])) {
    $come_from = $_SERVER['HTTP_REFERER'];
}

header("Location: {$come_from}");
