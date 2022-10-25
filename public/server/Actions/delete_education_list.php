<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$getID = $_GET['educationID'];

$setToContactList-> deleteCustomData('eductions', 'id', $getID);
header("location: /mydashboard/biographyDashboard.php");