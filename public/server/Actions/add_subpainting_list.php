<?php

require_once '../SetterDB.php';
$setToContactList = new SetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/paintings";
$paintingID = $_GET['paintingContainerID'];
$paintingTitle = $_POST['paintingTitle'];
$paintingdFile = $_FILES['paintingdFile']["tmp_name"][0];
move_uploaded_file($paintingdFile, "$upload_dir/$paintingTitle.jpg");

$setToContactList-> setSubPainting("$paintingTitle", $paintingID);
header("location: /paintings");