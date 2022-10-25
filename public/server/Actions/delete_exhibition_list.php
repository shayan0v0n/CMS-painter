<?php

require_once '../../../vendor/autoload.php';
$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/exhibitions";
use Server\SetterDB;
use Server\GetterDB;
$getContactList = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['exhibitionId'];
$getCurrentExhibition = $getContactList-> getCustomData('exhibitions', 'id', $getID);
$getCurrentExhibitionTitle = $getCurrentExhibition[0]['title'];
$setToContactList-> deleteCustomData('exhibitions', 'id', $getCurrentExhibition[0]['id']);
unlink("$upload_dir/$getCurrentExhibitionTitle.jpg");
header("location: /mydashboard/exhibitionsDashboard.php");