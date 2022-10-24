<?php

require_once '../../../vendor/autoload.php';
use Server\GetterDB;
use Server\SetterDB;
$setToContactList = new SetterDB();
$getToDrawingList = new GetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/paintings";
$paintingTitle = $_POST['paintingTitle'];
$paintingdFile = $_FILES['paintingdFile']["tmp_name"][0];

$findedDraw = $getToDrawingList-> getCustomData("drawings", "title", $drawingTitle);
if (count($findedDraw) !== 0) header("location: /mydashboard/paintingsDashboard.php");
else {
    move_uploaded_file($paintingdFile, "$upload_dir/$paintingTitle.jpg");
    $setToContactList-> setPainting("$paintingTitle");
    header("location: /paintings");
}
