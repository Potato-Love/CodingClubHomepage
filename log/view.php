<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ver04/base.css">
    <link rel="stylesheet" href="view.css?afte">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
    error_reporting(0);
    ?>
    <header>
        <div class="menubtn">
            <input type="checkbox" id="menubtn">
            <label for="menubtn" id="mb">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="menu">
                <h1 id='log'>
                    <?php
                    if (!$_SESSION['isLogin']) {
                        echo "<a href = '/ver04/login/login.php' class='log'>Log in</a>";
                    } else {
                        echo "<a href = '/ver04/login/logout.php' class='log'>Log out</a>";
                    }
                    ?>
                </h1>
                <div class="menuList">
                    <span><a href="/ver04/index.php">Home</a></span>
                    <br>
                    <span><a href="/ver04/About us">About us</a></span>
                    <br>
                    <span><a href="/ver04/project">Project</a></span>
                    <br>
                    <span><a href="/ver04/log" id="selectedMenu">log</a></span>
                    <br>
                    <span><a href="/ver04/board">board</a></span>
                </div>
            </div>
        </div>
        <div id="logo">
            <h1>I/O</h1>
        </div>
    </header>
    <?php
        $number = $_GET['No'];
        $number = mysqli_real_escape_string($conn, $number);

        $query = "select * from log_board where number = '$number'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    ?>
    <div id="contentArea">
        <div id="title">
        <h1><?php echo $row['title'] ?></h1>
        </div>
        <h3 id="date"><?php echo $row['date'] ?></h3>
        <hr>
        <div id="memo">
        <?php echo $row['memo']?>
        </div>
        <button><a href="index.php">목록</a></button>
        <?php
        if($_SESSION['isLogin'] == '1'){
        ?>
        <div id="delwrite">
        <button><a href="write.php?No=<?= $row['number'] ?>">수정</a></button>
        <button onclick="return confirm('정말 삭제하시겠습니까?')"><a href="delete.php?No=<?= $row['number'] ?>">삭제</a></button>
        <div>
        <?php 
        } 
        ?>
    </div>
</body>
</html>