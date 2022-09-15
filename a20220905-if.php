<?php
$age = empty($_GET['age']) ? 0 : intval($_GET['age']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a20220905-if</title>
</head>

<body>
    <?php
    if ($age >= 18):
    ?>
        <h2>歡迎光臨</h2>
        <img src=">18.jpg" alt="" style="width:500px">
    <?php
    else:
    ?>
        <h2>長大後再來</h2>
        <img src="<18.jpg" alt="" style="width:500px">
    <?php
    endif;
    ?>
</body>

</html>