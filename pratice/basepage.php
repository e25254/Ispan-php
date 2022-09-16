<?php require __DIR__ . "/connect-db.php";

// 每頁最多呈現幾筆資料
$perpage = 20 ; 

// 先來計算總筆數 做出分頁按鈕
// 先寫 ＳＱＬ

$t_sql = "SELECT COUNT(1) FROM address_book" ;

// 把 $t_sql 這段帶進去資料庫拿資料

$totalRow = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 總頁數
$totalPage = ceil($totalRow/$perpage);


echo json_encode($totalPage);
exit;

?>


<?php require __DIR__ . "/html-head.php";?>
<?php require __DIR__ . "//navbar.php";?>
<div class="container">
     
</div>
<?php require __DIR__ . "/html-script.php";?>
<?php require __DIR__ . "/html-footer.php";?>
