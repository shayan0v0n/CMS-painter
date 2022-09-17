<?php

$dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/press";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['pressLink'];
$paintingsData = $getDatabase-> getCustomData('press', 'id', $getID);
$pressLink = $paintingsData[0]['link'];
$setToContactList-> deleteCustomData('press', 'id', $getID);
unlink("$dir/$pressLink");
header("location: /mydashboard/pressDashboard.php");