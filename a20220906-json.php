<?php


$ar5 = [
    'name' => '小新',
    'age' => 30,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre id="pre"></pre>
    <script>

        let pre = document.querySelector('#pre')

        let obj = <?= json_encode($ar5,JSON_UNESCAPED_UNICODE) ?>;

        console.log(obj);

        pre.innerHTML = JSON.stringify(obj,null,4);

    </script>
</body>
</html>