<?php

$dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/publications";
require_once '../SetterDB.php';
require_once '../GetterDB.php';
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['publicationId'];
$getCurrentPublication = $getDatabase-> getCustomData('publications', 'id', $getID);
$getCurrentPublicationName = $getCurrentPublication[0]['link'];
$setToContactList-> deleteCustomData('publications', 'id', $getCurrentPublication[0]['id']);
unlink("$dir/$getCurrentPublicationName");
header("location: /mydashboard/publicationsDashboard.php");