<?php

require_once '../../../vendor/autoload.php';
use Server\GetterDB;
use Server\SetterDB;
$setToContactList = new SetterDB();
$getToDrawingList = new GetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/exhibitions";
$exhibitionLocation = $_POST['exhibitionLocation'];
$exhibitionPlace = $_POST['exhibitionPlace'];
$exhibitionDate = $_POST['exhibitionDate'];
$exhibitionTitle = $_POST['exhibitionTitle'];
$exhibitionFile = $_FILES['exhibitionFile']["tmp_name"][0];

$findedDraw = $getToDrawingList-> getCustomData("exhibitions", "title", $exhibitionTitle);
if (count($findedDraw) !== 0) header("location: /mydashboard/exhibitionsDashboard.php");
else {
    move_uploaded_file($exhibitionFile, "$upload_dir/$exhibitionTitle.jpg");
    $setToContactList-> setExhibition($exhibitionTitle, $exhibitionLocation, $exhibitionDate, $exhibitionPlace);
    header("location: /exhibitions");
}
