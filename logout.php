<?php

session_start();  // 啟用 session

unset($_SESSION['user1']);

// session_destroy(); # 所有 session 都清除

header('Location: a20220908-login-form.php');
