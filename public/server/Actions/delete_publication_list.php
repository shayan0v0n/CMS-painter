<?php

$dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/publications";
require_once '../../../vendor/autoload.php';
use Server\SetterDB;
use Server\GetterDB;
$getDatabase = new GetterDB();
$setToContactList = new SetterDB();
$getID = $_GET['publicationId'];
$getCurrentPublication = $getDatabase-> getCustomData('publications', 'id', $getID);
$getCurrentPublicationName = $getCurrentPublication[0]['link'];
$getCurrentPublicationTitle = $getCurrentPublication[0]['title'];
$setToContactList-> deleteCustomData('publications', 'id', $getCurrentPublication[0]['id']);
unlink("$dir/$getCurrentPublicationTitle.pdf");
header("location: /mydashboard/publicationsDashboard.php");