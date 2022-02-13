<?php include_once "../db.php";

//backend del ad method
$id = $_GET['id'];

$portfolio = $Portfolio -> find($id);

dd($portfolio);
if (file_exists("../img/" . $portfolio['img'])) {
    unlink("../img/" . $portfolio['img']);
}

$Portfolio -> del($id);

to("../backstage.php?do=manage&edit=portfolio");

?>