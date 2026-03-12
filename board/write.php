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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css?after">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">

 <!--  jQuery, bootstrap -->
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
</head>

<body>
    <?php
    $number = $_GET['No'];
    $number = mysqli_real_escape_string($conn, $number);
    $query =  "SELECT * FROM free_board WHERE number='$number'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <script>    
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: '내용을 작성하세요',
            height: 300,
            maxHeight: 3000,             // 최대 높이
            maxHeight: 400
        });
    });
    </script>
    <div id="container">
        <a href="index.php"><button class="button" onclick="return confirm('작성을 취소하시겠습니까?')">목록</button></a>
        <form action="insert.php" method="POST">
            <input type="hidden" name="number" value=<?=$number?>>
            <input type="text" name="title" placeholder="제목" style="width: 100%; height: 40px;" value=<?= $row['title'] ?>>
            <div class="contentArea">
            <textarea name="memo" id="summernote" cols="30" rows="10"><?= $row['memo'] ?></textarea>
            </div>
            <div id="savBtn">
            <button type="submit" class="button" >저장</button>
            </div>
        </form>
    </div>
</body>

</html>