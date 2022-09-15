<?php
header('Content-Type: application/json');
require __DIR__ . '/a20220912-connect_db.php';

$stmt = $connection->query("SELECT * FROM categories");

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);
