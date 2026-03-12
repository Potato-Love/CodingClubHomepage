<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
$id = $_POST['uid'];
$pw = $_POST['pw'];
$id = mysqli_real_escape_string($conn, $id);
$pw = mysqli_real_escape_string($conn, $pw);

$query = "SELECT * FROM login WHERE id= '$id' and pw='$pw'";
if (!$query) {
    echo 'failed';
}
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    $_SESSION['isLogin'] = $row['number'];
    $_SESSION['name'] = $row['name'];

    echo "<script>
           alert('{$_SESSION['name']}님 환영합니다');
           window.history.go(-2);
          </script>";
} else {
    ?>
    <script>
        alert('로그인 정보가 올바르지 않습니다.\n이상이 있을 경우 관리자에게 문의하세요.')
        location.href='login.php';
    </script>
    <?php
}
?>