<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ver04/base.css">
    <link rel="stylesheet" href="index.css?after">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">
    <title>Document</title>
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
                    <span><a href="/ver04/index.php">Home</a></span>
                    <br>
                    <span><a href="/ver04/About us"  id="selectedMenu">About us</a></span>
                    <br>
                    <span><a href="">Project</a></span>
                    <br>
                    <span><a href="/ver04/log/">log</a></span>
                    <br>
                    <span><a href="/ver04/board/">board</a></span>
                </div>
            </div>
        </div>
        <div id="logo">
            <h1>I/O</h1>

        </div>
    </header>
    <div id="container1">
    </div>
    <div id="container2">
        <h1>IO는 치악고등학교 코딩, 영상 동아리 입니다.</h1>
        <br>
        <h3>자유로운 프로젝트 환경 등을 바탕으로 
            <br>
             코딩, 영상 등 컴퓨터 관련 분야로 동아리 활동을 하고 있습니다.
        </h3>
    </div>
    <div id="container3">
        <h1>IO를 다양한 플랫폼에서 만나보세요.</h1>
        <div id="cubeArea">
            <div id="ioYoutube"></div>
            <div id="chYoutube"></div>
        </div>
    </div>
</body>

</html>