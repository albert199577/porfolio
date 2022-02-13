<?php include_once "../db.php";

//backend del ad method
$id = $_GET['id'];

$contact = $Contact -> find($id);

$contact['sh'] = ($contact['sh'] + 1) % 2;

dd($contact);

$Contact -> save($contact);

to("../backstage.php?do=manage&edit=contact");

?>