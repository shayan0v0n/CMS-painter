<?php

$dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/publications";
require_once 'actionDB.php';
$setToContactList = new ActionDB();
$getID = $_GET['pressLink'];
$setToContactList-> deleteCustomData('press', 'link', $getID);
unlink("$dir/$getID");
header("location: /mydashboard/pressDashboard.php");