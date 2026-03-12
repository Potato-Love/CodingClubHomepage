<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="login.css?after">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
     include $_SERVER["DOCUMENT_ROOT"] . '/ver04/dataBase/dbConn.php';
     error_reporting(0);
     if($_SESSION['isLogin']){
         echo "<script>alert('잘못된 접근입니다.');
         window.history.go(-1);</script>";
         exit;
     }
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
                    <span><a href="/log">Blog</a></span>
                    <br>
                    <span><a href="/board">Board</a></span>
                </div>
            </div>
        </div>
        <div id="logo">
            <h1>I/O</h1>
        </div>
    </header>
        <div id="imageArea">
        </div>
        <div id="loginArea">
            <h1>Log in</h1>
            <form action="loginProc.php" method="POST">
                <input type="text" name="uid" placeholder="ID" class="textArea" autocomplete="off">
                <br>
                <input type="password" placeholder="비밀번호" name="pw" id="pwd" class="textArea">
                <br>
                <button type="submit" id="loginBtn">로그인</button>
            </form>
        </div>
</body>

</html>