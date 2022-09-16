<?php

require_once 'SetterDB.php';
$setToContactList = new SetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/publications";
$publicationName = $_POST['publicationName'];
$publicationTitle = $_POST['publicationTitle'];
$publicationFile = $_FILES['publicationFile']["tmp_name"][0];
$publicationFileName = $_FILES['publicationFile']["name"][0];

move_uploaded_file($publicationFile, "$upload_dir/$publicationFileName");

$setToContactList-> setPublicationList($publicationName, $publicationTitle, $publicationFileName);
header("location: /publications");