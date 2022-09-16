<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/drawings";
require_once 'actionDB.php';
$setToContactList = new ActionDB();
$getID = $_GET['drawingId'];
$setToContactList-> deleteCustomData('drawings', 'title', $getID);
unlink("$dir/$getID.jpg");
header("location: /mydashboard/drawingsDashboard.php");