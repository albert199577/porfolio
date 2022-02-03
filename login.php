<?php 
include_once "./db.php";

?>

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
            <li><a href="javascript:void(0)" onclick="mangePage()" disabled>Manage</a></li>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
            <li><a href="./api/logout.php">Logout</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <!-- login -->
    <section class="login-page" style="height: calc(100vh - 64px);display: flex;">
        <main class="container">
            <h1>Login</h1>
            <form action="./api/check_login.php" method="POST" class="form border border-info p-4 mx-auto my-5 w-md-50">
                <?php
                if (isset($_SESSION['error'])) {
                ?>
                <p><?=$_SESSION['error'];?></p>
                <?php
                }
                ?>
                <div class="row my-3">
                    <div class="col">
                        <label for="">Account</label>
                        <input type="text" class="form-control" name="account">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <label for="exampleFormControlTextarea1">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                </div>
                <button class="btn btn-info mx-auto">Log In</button>
            </form>
        </main>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>

<script>
    mangePage();
    function mangePage() {
        $.get("./api/manage.php", {}, (manages) => {
            $(".login-page").html(manages);
        })
    }
    
    function personalEdit() {
        $.get("./backend/edit_personal.php", {}, (manages) => {
            $(".contain").html(manages);
        })
    }

    function portfolioEdit() {
        $.get("./backend/edit_portfolio.php", {}, (manages) => {
            $(".contain").html(manages);
        })
    }

    function websiteEdit() {
        $.get("./backend/edit_website.php", {}, (manages) => {
            $(".contain").html(manages);
        })
    }


</script>