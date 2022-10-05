<?php

require_once '../../../vendor/autoload.php';
use Server\SetterDB;
$setToContactList = new SetterDB();
$setToContactList-> setContactList($_POST['contactName'], $_POST['contactEmail'],
$_POST['contactSubject'], $_POST['contactMessage']);
header("location: /contact");