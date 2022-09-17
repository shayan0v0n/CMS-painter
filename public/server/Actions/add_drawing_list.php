<?php

require_once '../SetterDB.php';
$setToContactList = new SetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/drawings";
$drawingTitle = $_POST['drawingTitle'];
$drawingFile = $_FILES['drawingFile']["tmp_name"][0];
move_uploaded_file($drawingFile, "$upload_dir/$drawingTitle.jpg");

$setToContactList-> setDrawing($drawingTitle);
header("location: /drawings");