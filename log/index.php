<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ver04/base.css">
    <link rel="stylesheet" href="loglist.css?after">
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
    <div id="container">
        <div id="banner"></div>
            <a href="#write.php "><button id="writeBtn">글쓰기</button></a>
        <table>
            <thead bgcolor='lightgrey'>
                <tr>
                    <th width='50px' height='40px'>No.</th>
                    <th width='500px'>제목</th>
                    <th width='100px'>작성일자</th>
                </tr>
            </thead>
            <?php
            $query = "select * from log_board order by number desc";
            $result = mysqli_query($conn, $query);

            while($data = mysqli_fetch_array($result)){
            ?>
                <tr height='40px'>
                    <td align="center"><?=$data['number']?></td>
                    <td><a href="view.php?No=<?=$data['number']?>"><?=$data['title']?></a></td>
                    <td><?=$data['date']?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>