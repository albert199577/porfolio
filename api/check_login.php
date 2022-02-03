<?php include_once "../db.php";

//frontend check login  
if(isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

// checkLogin($_POST);



if ($Account->checkLogin($_POST)) {
    $_SESSION['user'] = $_POST['account'];
} else {
    $_SESSION['error'] = "帳號密碼錯誤, 請重新輸入";
}

to("../login.php");

