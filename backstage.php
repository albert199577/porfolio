<?php include "./db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackStorage Login</title>
    <link rel="short icon" href="./personal.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link rel="stylesheet" href="./style/back.css" type="text/css">
</head>
<body>
    <!-- nav -->
    <nav class="nav-flex">
        <div>
            <span class="logo"><a href="#">Albert's BlOG</a></span>
            <a class="icon"><i class="fa fa-bars"></i></a> 
        </div>
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="./index.php">FrontStage</a></li>
            <li><a href="./backstage.php?do=manage">Manage</a></li>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
            <li><a href="./api/logout.php">Logout</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <?php
        $do = $_GET['do'] ?? "login";
        $file = "./backend/" . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./backend/login.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="back-app.js"></script>
</body>
</html>