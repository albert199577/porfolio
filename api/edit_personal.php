<?php include_once "../db.php";
$_POST = json_decode(file_get_contents('php://input'), true);

dd($_POST);


$About -> save($_POST);

?>