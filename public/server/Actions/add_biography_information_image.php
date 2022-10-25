<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$bioImage = $_FILES['fileBio']["tmp_name"][0];
$bioImageName = $_FILES['fileBio']['name'];

move_uploaded_file($bioImage, "$upload_dir/$bioImageName[0]");
$setToContactList-> updateBiographyImage("$bioImageName[0]");
header("location: /mydashboard/biographyDashboard.php");