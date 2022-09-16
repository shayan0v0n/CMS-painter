<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/publications";
require_once 'actionDB.php';
$setToContactList = new ActionDB();
$getID = $_GET['publicationId'];
$setToContactList-> deleteCustomData('publications', 'link', $getID);
unlink("$dir/$getID");
header("location: /mydashboard/publicationsDashboard.php");