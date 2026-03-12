<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
include $_SERVER["DOCUMENT_ROOT"] .'/ver04/login/ban.php';
error_reporting(0);

if ($_SESSION['isLogin'] != '1') {
    echo "<script>alert('최고관리자만 이용 가능합니다')</script>";
    echo "<script>location.href='/ver04/log/index.php'</script>";
    exit;
}

$number = $_GET['No'];
$number = mysqli_real_escape_string($conn, $number);

$query = "DELETE FROM log_board WHERE number= '$number'";
mysqli_query($conn, $query);
?>
<script>location.href = 'index.php'</script>