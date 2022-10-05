<?php

require_once '../../../vendor/autoload.php';
use Server\SetterDB;
$setToContactList = new SetterDB();
$currnetName = $_GET['contactListId'];
$setToContactList-> deleteCustomData('contact', 'id', $currnetName);
header("location: /mydashboard/contactDashboard.php");