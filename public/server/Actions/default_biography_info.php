<?php

require_once '../../../vendor/autoload.php';

use Server\SetterDB;

$currentId = $_GET['bioId'];
$setter = new SetterDB();

$setter->setDefoultBiography($currentId);
header("location: /mydashboard/biographyDashboard.php");