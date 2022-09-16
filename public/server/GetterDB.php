<?php

require_once 'Database.php';

class GetterDB extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function getData($tableType) {
        $allData = [];
        $currentPDO = $this-> pdo;
        $sql = "SELECT * FROM $tableType";
        $statement = $currentPDO->query($sql);
        while (($row = $statement-> fetch(PDO::FETCH_ASSOC)) !== false) {
            array_push($allData, $row);
        }

        return $allData;
    }

    public function getCustomData($tableType, $conditionType, $conditionValue) {
        $allData = [];
        $currentPDO = $this-> pdo;
        $sql = "SELECT * FROM $tableType WHERE $conditionType = '$conditionValue'";
        $statement = $currentPDO-> query($sql);
        while(($row = $statement-> fetch(PDO::FETCH_ASSOC)) !== false) {
            array_push($allData, $row);
        }

        return $allData;
    }
}