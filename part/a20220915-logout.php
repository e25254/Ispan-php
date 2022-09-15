<?php

session_start();  // 啟用 session

unset($_SESSION['user1']);

// session_destroy(); # 所有 session 都清除

header('Location: basepagewithdel&edit.php');
