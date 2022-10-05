<?php namespace Public\Server;
ini_set("display_errors", "off");
use Server\Database;

class ActionDB extends Database {
    public function __construct() {
        parent::__construct();
    }
}