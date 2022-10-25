<?php namespace Server;
ini_set("display_errors", "off");
use PDO;

class Database {
    public $pdo;
    public function __construct() {
        $this-> pdo = new PDO("mysql:host=localhost;charset=UTF8", 'root', '');
        $this-> setUpDB();
    }
    
    public function setUpDB() {
        $currentPDO = $this-> pdo;
        $statement = "CREATE DATABASE IF NOT EXISTS `painterTheme`";
        $currentPDO-> exec($statement);
        $statement = "USE `painterTheme`";
        $currentPDO-> exec($statement);

        $statements = ["
            CREATE TABLE IF NOT EXISTS `contact` (
                `id` int AUTO_INCREMENT,
                `name` varchar(40),
                `email` varchar(40),
                `subject` varchar(50),
                `message` text,
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `publications` (
                `id` int AUTO_INCREMENT,
                `name` varchar(50),
                `title` varchar(50),
                `link` varchar(150),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `press` (
                `id` int AUTO_INCREMENT,
                `title` varchar(40),
                `internal` bool default 0,
                `link` varchar(100),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `exhibitions` (
                `id` int AUTO_INCREMENT,
                `title` varchar(100),
                `date` int,
                `place` varchar(50),
                `location` varchar(50),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `drawings` (
                `id` int AUTO_INCREMENT,
                `title` varchar(50),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `paintings` (
                `id` int AUTO_INCREMENT,
                `title` varchar(40),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `subpaintings` (
                `id` int AUTO_INCREMENT,
                `paintingID` int,
                `title` varchar(40),
                PRIMARY KEY(id)
            );
        ",
        "
            CREATE TABLE IF NOT EXISTS `admin` (
                `name` varchar(40),
                `password` varchar(40)
            );
        ",
        "ALTER TABLE `subpaintings` ADD FOREIGN KEY (`paintingID`) REFERENCES `paintings` (`id`)"
        ];

        foreach ($statements as $statement) {
            $currentPDO->exec($statement);
        }
    }
}

$db = new Database();