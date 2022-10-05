<?php

require_once '../../../vendor/autoload.php';
use Server\SetterDB;
$setToContactList = new SetterDB();
$upload_dir = "C:\Users\shayanDev\Desktop\projects\CMS-painter/press";

$pressTitle = $_POST['pressTitle'];
$isInternal = $_POST['isInternal'];
$pressLink = $_POST['pressLink'];
$pressFile = $_FILES['pressFile']["tmp_name"][0];

var_dump($pressFile);

if ($isInternal == 'on') {
    $setToContactList-> setPress($pressTitle, $pressLink, 1);
}else {
    move_uploaded_file($pressFile, "$upload_dir/$pressTitle.pdf");
    $setToContactList-> setPress($pressTitle, $pressTitle, 0);
}

header("location: /press");