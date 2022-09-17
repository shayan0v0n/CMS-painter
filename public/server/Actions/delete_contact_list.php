<?php

require_once '../SetterDB.php';
$setToContactList = new SetterDB();
$currnetName = $_GET['contactListId'];
$setToContactList-> deleteCustomData('contact', 'id', $currnetName);
header("location: /mydashboard/contactDashboard.php");