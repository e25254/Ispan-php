<?php
header('Content-Type: application/json');

echo json_encode([
    'postData' => $_POST,
    'fileData' => $_FILES
]);

