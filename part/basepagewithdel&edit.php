<?php require __DIR__ . '/a20220912-connect_db.php';


$perPage = 20; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_sql = "SELECT COUNT(1) FROM address_book";

$totalRows = $connection->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$totalPages = ceil($totalRows / $perPage);

$rows = [];

if ($totalRows) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    $sql = sprintf(
        "SELECT * FROM address_book ORDER BY SID DESC LIMIT %s , %s",
        ($page - 1) * $perPage,
        $perPage
    );
    $row = $connection->query($sql)->fetchAll();
}

$output = [
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'page' => $page,
    'rows' => $row,
    'perPage' => $perPage,
];
// echo json_encode($output);exit;
?>
<?php require __DIR__ . '/a20220908-login-form.php'; ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">
                            <i class="fa-solid fa-trash-can"></i>
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">姓名</th>
                        <th scope="col">email</th>
                        <th scope="col">手機</th>
                        <th scope="col">生日</th>
                        <th scope="col">地址</th>
                        <th scope="col">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row as $r) : ?>
                        <tr>
                            <td>
                                <a href="javascript: delete_it(<?= $r['sid'] ?>)">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                            <td><?= htmlentities($r['sid']) ?></td>
                            <td><?= htmlentities($r['name']) ?></td>
                            <td><?= htmlentities($r['email']) ?></td>
                            <td><?= htmlentities($r['mobile']) ?></td>
                            <td><?= htmlentities($r['birthday']) ?></td>
                            <td><?= htmlentities($r['address']) ?></td>
                            <td>
                                <a href="a20220914-editFrom.php?sid=<?= $r['sid'] ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= 1 == $page ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                        </a>
                    </li>

                    <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                    ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                    <?php
                        endif;
                    endfor; ?>

                    <li class="page-item <?= $totalPages == $page ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    const table = document.querySelector('table');
    // table.addEventListener('click', function(event) {
    //     const t = event.target;
    //     console.log(event.target);
    //     if (t.classList.contains('fa-trash-can')) {
    //         t.closest('tr').remove();
    //     }
    //     if (t.classList.contains('fa-pen-to-square')) {
    //         // console.log(t.closest('tr').querySelectorAll('td'));

    //         console.log(
    //             t.closest('tr').querySelectorAll('td')[2].innerHTML
    //         );

    //     }
    // });

    function delete_it(sid) {
        if (confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)) {
            location.href = `a20220914-delete.php?sid=${sid}`;
        }
    }
</script>
<?php include __DIR__ . '/a20220906-a-part3.php'; ?>
<?php include __DIR__ . '/a20220906-a-part4.php'; ?>