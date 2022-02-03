<?php
include_once "../db.php";
$data = $About -> all();
echo json_encode($data);
