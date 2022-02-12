<?php include_once "../db.php";

$_POST = json_decode(file_get_contents('php://input'), true);


//frontend check login
// if(isset($_SESSION['error'])) {
//     unset($_SESSION['error']);
// }

// checkLogin($_POST);


if ($Account -> checkLogin($_POST)) {
    $_SESSION['user'] = $_POST['account'];
    echo "1";
} else {
    echo "0";
}



