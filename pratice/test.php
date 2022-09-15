<?php

header('Content-Type: application/json');

require __DIR__ . '/connect-db.php';

$stmt = $pdo->query("SELECT * FROM categories");

echo json_encode($stmt->fetchAll() , JSON_UNESCAPED_UNICODE);