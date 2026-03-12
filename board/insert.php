<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
include $_SERVER["DOCUMENT_ROOT"] .'/ver04/login/ban.php';
error_reporting(0);

$number = $_POST['number'];
$writer = $_SESSION['name'];
$title = $_POST['title'];
$date = date("Y-m-d", time());
$memo = $_POST['memo'];
$writer_id = $_SESSION['isLogin'];
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
    $query = "update free_board set title='$title', memo='$memo'
    where number='$number'";
    mysqli_query($conn, $query);
}else{
$query = "insert into free_board(writer, title, memo, date, writer_id)
          values('$writer', '$title', '$memo', '$date', '$writer_id')";
mysqli_query($conn, $query);
}
?>
<script>
    location.href='index.php'
</script>