<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/paintings";
require_once 'SetterDB.php';
$setToContactList = new SetterDB();

$getID = $_GET['subpaintingId'];

$setToContactList-> deleteCustomData('subpaintings', 'title', $getID);
unlink("$dir/$getID.jpg");
header("location: /mydashboard/paintingsDashboard.php");