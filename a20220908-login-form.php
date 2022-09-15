<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>
    .col-lg-6 {
      justify-content: center;
      align-items: center;
    }

    .row {
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>

<?php
    if(! isset($_SESSION)){
        session_start();
    }
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php if (empty($_SESSION['user1'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="a20220908-login-form.php">登入</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">註冊</a>
          </li>

        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link"><?= $_SESSION['user1']['nickname'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">登出</a>
          </li>
        <?php endif; ?>

      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex mt-5">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <form name="form1" onsubmit="checkForm();return false;">
              <div class="form-group">
                <label for="email">Account</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter account" name="account">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <input type="checkbox" name="cbpsw" id="cbpsw" onclick="pswview()">
                <label for="cbpsw">Show Password</label>
              </div>


              <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>


            </form>
            <!-- <a href="https://shopping.pchome.com.tw/" onclick="confirm('買') ? null :event.preventDefault()">shopping</a>
        <a href="https://shopping.pchome.com.tw/" onclick="return false;">shopping</a> -->
          </div>
        </div>

      </div>
    </div>
  </div>



  <script>
    let btnbox = document.querySelector('#submitbtn')
    let emailtxt = document.querySelector('#email')
    let pswtxt = document.querySelector('#password')
    let cbbox = document.querySelector('#cb')
    let mydatetimebox = document.querySelector('#mydatetime')

    // btnbox.addEventListener('click', function() {
    //   let email = emailtxt.value
    //   let psw = pswtxt.value
    // let cb = cbbox.checked
    // let mydatetime = mydatetimebox.value
    //   console.log(email);
    //   console.log(psw);
    //   console.log(cb);
    //   console.log(mydatetime);
    // })



    async function checkForm() {
      let fd = new FormData(document.form1);
      let r = await fetch('login-api.php', {
        method: 'POST',
        body: fd,
      });
      let obj = await r.json();
      console.log(obj);
      if(obj.success){
        location.href = location.href;
        //location.reload();
      }else{
        alert(obj.error);
      }
    }








    function pswview() {
      if (pswtxt.type === 'password') {
        pswtxt.type = 'text'
      } else {
        pswtxt.type = 'password'
      }
    }
    //document.form1
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>