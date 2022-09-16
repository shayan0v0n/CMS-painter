<?php

require_once 'actionDB.php';
$setToContactList = new ActionDB();
$getID = $_GET['exhibitionId'];
$setToContactList-> deleteCustomData('exhibitions', 'id', $getID);
header("location: /mydashboard/exhibitionsDashboard.php");