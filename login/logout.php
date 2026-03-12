<?php
include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
$_SESSION['isLogin'] = "";
$_SESSION['name'] = "";
?>
<script>
    alert('로그아웃 되었습니다.');
    location.href='/ver04/index.php';
</script>