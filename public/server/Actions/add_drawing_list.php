<?php

require_once '../../../vendor/autoload.php';

use Server\GetterDB;
use Server\SetterDB;
$setToContactList = new SetterDB();
$getToDrawingList = new GetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/drawings";
$drawingTitle = $_POST['drawingTitle'];
$drawingFile = $_FILES['drawingFile']["tmp_name"][0];

$findedDraw = $getToDrawingList-> getCustomData("drawings", "title", $drawingTitle);
if (count($findedDraw) !== 0) header("location: /mydashboard/drawingsDashboard.php");
else {
    move_uploaded_file($drawingFile, "$upload_dir/$drawingTitle.jpg");
    $setToContactList-> setDrawing($drawingTitle);
    header("location: /drawings");
}