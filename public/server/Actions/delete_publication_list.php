<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/publications";
require_once '../SetterDB.php';
$setToContactList = new SetterDB();
$getID = $_GET['publicationId'];
$setToContactList-> deleteCustomData('publications', 'link', $getID);
unlink("$dir/$getID");
header("location: /mydashboard/publicationsDashboard.php");