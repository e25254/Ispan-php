<?php require __DIR__ . "/connect-db.php";

// 每頁最多呈現幾筆資料
$perpage = 20 ; 

// 用戶要呈現的是第幾頁 有指定的話把數值轉換成整數 沒有指定的話給 1 這個值
$page = isset($_GET['page']) ? intval($_GET['page']) : 1 ;

// 先來計算總筆數 做出分頁按鈕
// 先寫 ＳＱＬ

$t_sql = "SELECT COUNT(1) FROM address_book" ;

// 把 $t_sql 這段帶進去資料庫拿資料

$totalRow = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 總頁數
$totalPage = ceil($totalRow/$perpage);


echo json_encode([
    "totalRow" => $totalRow,
    "totalPage" => $totalPage,
    "page" => $page
] );
exit;

?>


<?php require __DIR__ . "/html-head.php";?>
<?php require __DIR__ . "//navbar.php";?>
<div class="container">
     
</div>
<?php require __DIR__ . "/html-script.php";?>
<?php require __DIR__ . "/html-footer.php";?>
