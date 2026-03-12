<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
include $_SERVER["DOCUMENT_ROOT"] .'/ver04/login/ban.php';
error_reporting(0);

if ($_SESSION['isLogin'] != '1') {
    echo "<script>alert('최고관리자만 이용 가능합니다')</script>";
    echo "<script>location.href='/ver04/log/index.php'</script>";
    exit;
}

$number = $_POST['number'];
$title = $_POST['title'];
$date = date("Y-m-d", time());
$memo = $_POST['memo'];
$number = mysqli_escape_string($conn, $number);
$title = mysqli_real_escape_string($conn, $title);
if(!$title or !$memo){
?>
<script>
    alert('제목 또는 내용을 입력해주세요');
    window.history.go(-1);
</script>
<?php
exit;
}
if($number){
    $query = "update log_board set title='$title', memo='$memo'
    where number='$number'";
    mysqli_query($conn, $query);
}else{
$query = "insert into log_board(title, date, memo)
          values('$title', '$date', '$memo')";
mysqli_query($conn, $query);
}
?>
<script>
    location.href='index.php'
</script>