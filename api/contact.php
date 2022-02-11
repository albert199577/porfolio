<?php include_once "../db.php";

//get post data transform
// echo file_get_contents('php://input');
$_POST = json_decode(file_get_contents('php://input'), true);
// dd($_POST);
$Contact -> save($_POST);

?>