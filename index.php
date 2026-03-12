<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?afte">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">
    <title>I/O</title>
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/ver04/dataBase/dbConn.php';
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
                  if(!$_SESSION['isLogin']){
                      echo "<a href = '/ver04/login/login.php' class='log'>Log in</a>";
                  }else{
                    echo "<a href = '/ver04/login/logout.php' class='log'>Log out</a>";
                  }
                ?>
                </h1>
                <div class="menuList">
                    <span><a href="index.php" id="selectedMenu">Home</a></span>
                    <br>
                    <span><a href="About us">About us</a></span>
                    <br>
                    <span><a href="">Project</a></span>
                    <br>
                    <span><a href="log/">log</a></span>
                    <br>
                    <span><a href="board/">board</a></span>
                </div>
            </div>
        </div>
        <div id="logo">
            <h1>I/O</h1>

        </div>
    </header>
    <div class="container">
        <h1 id="title">
            치악고등학교 코딩, 영상 동아리
            <br>
            IO 홈페이지에 오신 것을
            <br>
            환영합니다.
        </h1>
    </div>
</body>

</html>