<?php

require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getContactList = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['exhibitionId'];
$getCurrentExhibition = $getContactList-> getCustomData('exhibitions', 'id', $getID);
$setToContactList-> deleteCustomData('exhibitions', 'id', $getCurrentExhibition[0]['id']);
header("location: /mydashboard/exhibitionsDashboard.php");