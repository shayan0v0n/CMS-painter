<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$whenEducation = $_POST["whenEducation"];
$descriptionEducation = $_POST["descriptionEducation"];
$setToContactList-> addEducationList("$whenEducation", "$descriptionEducation");
header("location: /mydashboard/biographyDashboard.php");