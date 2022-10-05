<?php

$dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/press";
require_once '../../../vendor/autoload.php';
use Server\SetterDB;
use Server\GetterDB;
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['pressLink'];
$paintingsData = $getDatabase-> getCustomData('press', 'id', $getID);
$pressLink = $paintingsData[0]['link'];
$setToContactList-> deleteCustomData('press', 'id', $getID);
unlink("$dir/$pressLink");
header("location: /mydashboard/pressDashboard.php");