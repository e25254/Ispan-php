<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <form name="form1" method="post" enctype="application/x-www-form-urlencoded" onsubmit="return checkForm()">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="m[email]">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="m[password]">
        </div>
        <div class="form-group">
          <input type="checkbox" name="cbpsw" id="cbpsw" onclick="pswview()">
          <label for="cbpsw">Show Password</label>
        </div>
        <div class="form-group form-check">  
          <input type="checkbox" class="form-check-input" id="cb" name="cb" value="yes">
          <label class="form-check-label" for="cb">本站最高</label>
        </div>
        <div class="mb-3">
          <label for="mydatetime">日期＋時間</label>
          <input type="datetime-local" name="mydatetime" id="mydatetime">
        </div>
        <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
        
        
      </form>
      <!-- <a href="https://shopping.pchome.com.tw/" onclick="confirm('買') ? null :event.preventDefault()">shopping</a>
      <a href="https://shopping.pchome.com.tw/" onclick="return false;">shopping</a> -->
    </div>
  </div>
  <pre>
    <?php
      print_r($_POST)
    ?>
  </pre>




  <script>
    let btnbox = document.querySelector('#submitbtn')
    let emailtxt = document.querySelector('#email')
    let pswtxt = document.querySelector('#password')
    let cbbox = document.querySelector('#cb')
    let mydatetimebox = document.querySelector('#mydatetime')

    btnbox.addEventListener('click', function() {
      let email = emailtxt.value
      let psw = pswtxt.value
      let cb = cbbox.checked
      let mydatetime = mydatetimebox.value
      console.log(email);
      console.log(psw);
      console.log(cb);
      console.log(mydatetime);
    })

    function checkForm() {
      if (!cb.checked) {
        alert('請勾選[本站最高]');
        return false;
      }
    }
    function pswview(){
      if (pswtxt.type === 'password'){d
        pswtxt.type = 'text'
      }
      else{
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