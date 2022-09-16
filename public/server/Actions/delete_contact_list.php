<?php

require_once 'actionDB.php';
$setToContactList = new ActionDB();
$setToContactList-> deleteCustomData('contact', 'name', $_GET['contactListId']);
header("location: /mydashboard/contactDashboard.php");