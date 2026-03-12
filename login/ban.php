<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
error_reporting(0);

if (!$_SESSION['isLogin']) {
    echo "<script>alert('로그인 후 이용해 주세요')</script>";
    echo "<script>location.href='/ver04/login/login.php'</script>";
    exit;
}
?>