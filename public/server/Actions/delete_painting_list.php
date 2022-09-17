<?php

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/paintings";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();

$getID = $_GET['paintingId'];
$paintingsData = $getDatabase-> getCustomData('paintings', 'id', $getID);
$paintingTitle = $paintingsData[0]['title'];

$setToContactList-> deleteCustomData('subpaintings', 'paintingID', $paintingsData[0]['id']);
$setToContactList-> deleteCustomData('paintings', 'id', $paintingsData[0]['id']);
unlink("$upload_dir/$paintingTitle.jpg");
header("location: /mydashboard/paintingsDashboard.php");