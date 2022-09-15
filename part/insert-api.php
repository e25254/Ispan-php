<?php

require __DIR__ . '/a20220912-connect_db.php';

header('Content-Type: application/json');

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST,
];

if (empty($_POST['name'])) {
    $output['error'] = '參數不足';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `address_book`(
        `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
        ) VALUES (?, ?, ?, ?, ?, NOW())";

$stmt = $connection->prepare($sql);

$birthday = null;
if (strtotime($_POST['birthday']) !== false) {
    $birthday = $_POST['birthday'];
}
try {
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $birthday,
        $_POST['address'],
    ]);
} catch (PDOException $ex) {
    $output['error'] = $ex->getMessage();
}

if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    if (empty($output['error']))
        $output['error'] = '新增失敗';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
