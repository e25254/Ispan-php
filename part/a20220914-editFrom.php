<?php require __DIR__ . '/a20220912-connect_db.php';
$pageName = 'edit';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
if (empty($sid)) {
    header('Location: basepagewithdel&edit.php');
    exit;
}
$sql = "SELECT * FROM address_book WHERE sid=$sid";
$r = $connection->query($sql)->fetch();
if (empty($r)) {
    header('Location: basepagewithdel&edit.php');
    exit;
}



?>
<?php require __DIR__ . '/a20220908-login-form.php'; ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">修改資料</h5>
                    <form name="form1" onsubmit="checkForm(); return false;">
                        <input type="hidden" name="sid" value="<?= $r['sid'] ?>">  
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?= $r['name'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="<?= $r['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}?\d{3}?\d{3}" value="<?= $r['mobile'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $r['birthday'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>

                            <textarea class="form-control" name="address" id="address" cols="50" rows="3"><?= $r['address'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function checkForm() {

        let fd = new FormData(document.form1);
        for (let k of fd.keys()) {
            console.log(`${k}:${fd.get(k)}`);
        }

        fetch('edit-api.php', {
                method: 'POST',
                body: fd
            })
            // .then(r=>r.json()).then(obj=>{
            //      console.log(obj);
            //     if(! obj.success){
            //         alert(obj.error);
            //     }
            //  })

            .then(function(f) {
                return f.json()
            }).then(function(obj) {
                console.log(obj.success);
                if (!obj.success) {
                    alert(obj.error);
                } else {
                    alert('更改成功')
                    location.href = 'basepagewithdel&edit.php';
                }
            })


    }
</script>
<?php include __DIR__ . '/a20220906-a-part3.php'; ?>
<?php include __DIR__ . '/a20220906-a-part4.php'; ?>