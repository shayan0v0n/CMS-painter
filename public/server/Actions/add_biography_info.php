<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;
$setToContactList = new SetterDB();


$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/biography";
$bioInfo = $_POST;
$bioInfoUserName = $_POST["userName"];
$bioInfoWhereBorn = $_POST["whereBorn"];
$bioInfoWhenBorn = $_POST["whenBorn"];
$bioInfoWhenLiveAndWork = $_POST["whenLiveAndWork"];
$setToContactList->updateBiographyInfo("$bioInfoUserName", "$bioInfoWhereBorn", "$bioInfoWhenBorn", "$bioInfoWhenLiveAndWork");
header("location: /mydashboard/biographyDashboard.php");