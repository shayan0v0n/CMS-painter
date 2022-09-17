<?php

$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/drawings";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getContactList = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['drawingId'];
$getCurrentDraw = $getContactList-> getCustomData('drawings', 'id', $getID);
$currentDrawName = $getCurrentDraw[0]['title'];
$setToContactList-> deleteCustomData('drawings', 'id', $getID);
unlink("$upload_dir/$currentDrawName.jpg");
header("location: /mydashboard/drawingsDashboard.php");