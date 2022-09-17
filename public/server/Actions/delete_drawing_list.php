<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/drawings";
require_once 'SetterDB.php';
$setToContactList = new SetterDB();
$getID = $_GET['drawingId'];
$setToContactList-> deleteCustomData('drawings', 'title', $getID);
unlink("$dir/$getID.jpg");
header("location: /mydashboard/drawingsDashboard.php");