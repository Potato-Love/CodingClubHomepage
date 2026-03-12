<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
include $_SERVER["DOCUMENT_ROOT"] .'/ver04/login/ban.php';
error_reporting(0);

$number = $_GET['No'];
$number = mysqli_real_escape_string($conn, $number);
$query =  "SELECT * FROM free_board WHERE number='$number'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($number and $row['writer_id'] != $_SESSION['isLogin']) {
    echo "<script>alert('작성자만 접근할 수 있습니다.');
    location.href='index.php';
    </script>";
    exit;
}

$query = "DELETE FROM free_board WHERE number= '$number'";
mysqli_query($conn, $query);
?>
<script>location.href = 'index.php'</script>