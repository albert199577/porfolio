<?php include_once "../db.php";

//get post data transform
$_POST = json_decode(file_get_contents('php://input'), true);


// dd($_POST);

$Color -> save($_POST);
echo $Color -> find(1)['color'];
?>