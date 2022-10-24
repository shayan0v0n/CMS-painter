<?php

require_once '../../../vendor/autoload.php';
use Server\GetterDB;
use Server\SetterDB;
$setToContactList = new SetterDB();
$getToDrawingList = new GetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/publications";
$publicationName = $_POST['publicationName'];
$publicationTitle = $_POST['publicationTitle'];
$publicationFile = $_FILES['publicationFile']["tmp_name"][0];
$publicationFileName = $_FILES['publicationFile']["name"][0];

$findedDraw = $getToDrawingList-> getCustomData("publications", "title", $publicationTitle);
if (count($findedDraw) !== 0) header("location: /mydashboard/publicationsDashboard.php");
else {
    move_uploaded_file($publicationFile, "$upload_dir/$publicationTitle.pdf");
    $setToContactList-> setPublicationList($publicationName, $publicationTitle, $publicationTitle);
    header("location: /publications");
}