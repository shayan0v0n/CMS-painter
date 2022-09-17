<?php

require_once '../SetterDB.php';
$setToContactList = new SetterDB();
$setToContactList-> setContactList($_POST['contactName'], $_POST['contactEmail'],
$_POST['contactSubject'], $_POST['contactMessage']);
header("location: /contact");