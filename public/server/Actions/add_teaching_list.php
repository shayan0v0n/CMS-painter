<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$whenEducation = $_POST["whenTeachings"];
$descriptionEducation = $_POST["descriptionTeachings"];
$setToContactList-> addTeachingList("$whenEducation", "$descriptionEducation");
header("location: /mydashboard/biographyDashboard.php");