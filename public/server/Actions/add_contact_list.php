<?php

require_once '../../../vendor/autoload.php';

use Server\Security\GenerateCsrfToken;
use Server\SetterDB;

$token = new GenerateCsrfToken();
$tokenCode = $token->getToken();
$setToContactList = new SetterDB();

if($_POST['token'] !== $tokenCode) 
    header("location: /contact");

$setToContactList-> setContactList($_POST['contactName'], $_POST['contactEmail'],
$_POST['contactSubject'], $_POST['contactMessage']);
header("location: /contact");