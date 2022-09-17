<?php

require_once 'SetterDB.php';
$setToContactList = new SetterDB();
$getID = $_GET['exhibitionId'];
$setToContactList-> deleteCustomData('exhibitions', 'id', $getID);
header("location: /mydashboard/exhibitionsDashboard.php");