<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/paintings";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();

$getID = $_GET['paintingId'];
$paintingsData = $getDatabase-> getCustomData('paintings', 'title', $getID);
$paintingTitle = $paintingsData[0]['title'];

$setToContactList-> deleteCustomData('subpaintings', 'paintingID', $paintingsData[0]['id']);
$setToContactList-> deleteCustomData('paintings', 'id', $paintingsData[0]['id']);
unlink("$dir/$paintingTitle.jpg");
header("location: /mydashboard/paintingsDashboard.php");