<?php

require_once 'SetterDB.php';
$setToContactList = new SetterDB();
$setToContactList-> deleteCustomData('contact', 'name', $_GET['contactListId']);
header("location: /mydashboard/contactDashboard.php");