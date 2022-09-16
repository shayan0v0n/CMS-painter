<?php

require_once 'Database.php';

class ActionDB extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function deleteCustomData($tableType, $conditionType, $conditionValue) {
        $currentPDO = $this-> pdo;
        $sql = "DELETE FROM $tableType WHERE $conditionType = '$conditionValue'";
        $statement = $currentPDO-> query($sql);
        $statement-> execute();
    }
}