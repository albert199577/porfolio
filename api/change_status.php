<?php include_once "../db.php";

//backend change ad release  status
$id = $_GET['id'];
$portfolio = $Portfolio -> find($id);
$portfolio['sh'] = ($portfolio['sh'] + 1) % 2;
$Portfolio -> save($portfolio);

to("../backstage.php?do=manage&edit=portfolio");

?>