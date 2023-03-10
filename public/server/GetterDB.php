<?php namespace Server;
ini_set("display_errors", "off");
use Server\Database;
use PDO;

class GetterDB extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function getData(string $tableType): array {
        $allData = [];
        $currentPDO = $this-> pdo;
        $sql = "SELECT * FROM $tableType";
        $statement = $currentPDO->query($sql);
        while (($row = $statement-> fetch(PDO::FETCH_ASSOC)) !== false) {
            array_push($allData, $row);
        }

        return $allData;
    }

    public function getCustomData(string $tableType, string $conditionType, string $conditionValue): array {
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