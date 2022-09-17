<?php

$dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/paintings";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['subpaintingId'];
$paintingsData = $getDatabase-> getCustomData('subpaintings', 'id', $getID);
$paintingTitle = $paintingsData[0]['title'];
$setToContactList-> deleteCustomData('subpaintings', 'id', $getID);
unlink("$dir/$paintingTitle.jpg");
header("location: /mydashboard/paintingsDashboard.php");