<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$getID = $_GET['teachingID'];

$setToContactList-> deleteCustomData('teachings', 'id', $getID);
header("location: /mydashboard/biographyDashboard.php");