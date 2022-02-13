<?php include_once "../db.php";

//backend del ad method
$id = $_GET['id'];
$portfolio = $Portfolio -> find($id);

//backend edit ad img 
dd($_FILES);
dd($portfolio);

echo "tmp_name" . $_FILES['file']['tmp_name'] . "<br>";
echo "filename" . $_FILES['file']['name'] . "<br>";

if (!empty($_FILES['file']['tmp_name'])) {
    unlink("../img/" . $portfolio['img']);
    $filename = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "../img/{$filename}");
}

if (isset($filename)) {
    $_POST['img'] = $filename;
} 
dd($_POST);

$Portfolio -> save($_POST);
to("../backstage.php?do=manage&edit=portfolio");

?>