<?php

require_once '../../../vendor/autoload.php';
use Server\SetterDB;
use Server\GetterDB;
$getContactList = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['exhibitionId'];
$getCurrentExhibition = $getContactList-> getCustomData('exhibitions', 'id', $getID);
$setToContactList-> deleteCustomData('exhibitions', 'id', $getCurrentExhibition[0]['id']);
header("location: /mydashboard/exhibitionsDashboard.php");