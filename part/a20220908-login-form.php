<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<link rel="stylesheet" href="./FontAwesome/css/all.css">
	<style>
		.col-lg-6 {
			justify-content: center;
			align-items: center;
		}

		.row {
			justify-content: center;
			align-items: center;
		}

		.navbar-light .navbar-nav .active>.nav-link,
		.navbar-light .navbar-nav .nav-link.active,
		.navbar-light .navbar-nav .nav-link.show,
		.navbar-light .navbar-nav .show>.nav-link .active {
			border-radius: 5px;
			background-color: #00F;
			color: white;
			font-weight: 800;
		}
	</style>
</head>

<body>

	<?php
	if (!isset($_SESSION)) {
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
				<li class="nav-item ">
					<a class="nav-link navlinkactive <?= $pageName == 'home' ? 'active' : '' ?>" href="a20220914-home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link navlinkactive <?= $pageName == 'list' ? 'active' : ''  ?>" href="basepagewithdel&edit.php">列表</a>
				</li>
				<li class="nav-item">
					<a class="nav-link navlinkactive <?= $pageName == 'insert' ? 'active' : ''  ?>" href="a20220914-insertForm.php">新增</a>
				</li>
			</ul>
			<ul class="navbar-nav mb-2 mb-lg-0">
				<?php if (empty($_SESSION['user1'])) : ?>
					<li class="nav-item">
						<a class="nav-link" href="a20220915-loginform.php">登入</a>
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
			if (obj.success) {
				location.href = location.href;
				//location.reload();
			} else {
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