<?php

require_once '../SetterDB.php';
$setToContactList = new SetterDB();

$upload_dir = "C:\Users\shayanDev\Desktop\projects\mrkhosro-web/publications";
$exhibitionLocation = $_POST['exhibitionLocation'];
$exhibitionPlace = $_POST['exhibitionPlace'];
$exhibitionDate = $_POST['exhibitionDate'];

$setToContactList-> setExhibition($exhibitionLocation, $exhibitionDate, $exhibitionPlace);
header("location: /exhibitions");