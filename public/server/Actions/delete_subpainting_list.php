<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/paintings";
require_once 'actionDB.php';
$setToContactList = new ActionDB();

$getID = $_GET['subpaintingId'];

$setToContactList-> deleteCustomData('subpaintings', 'title', $getID);
unlink("$dir/$getID.jpg");
header("location: /mydashboard/paintingsDashboard.php");