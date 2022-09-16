<?php

require_once 'Database.php';

class SetterDB extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function setContactList($name, $email, $subject, $message): void {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO contact (name, email, subject, message) values (:name, :email, :subject, :message)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":name"=> $name,
            ":email"=> $email,
            ":subject"=> $subject,
            ":message"=> $message
        ]);
    }

    public function setPublicationList($name, $title, $link) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO publications (name, title, link) values (:name, :title, :link)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":name"=> $name,
            ":title"=> $title,
            ":link"=> $link,
        ]);
    }

    public function setExhibition($location, $date, $place) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO exhibitions (location, date, place) values (:location, :date, :place)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":location"=> $location,
            ":date"=> $date,
            ":place"=> $place,
        ]);
    }

    public function setDrawing($title) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO drawings (title) values (:title)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":title"=> $title
        ]);
    }

    public function setPainting($title) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO paintings (title) values (:title)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":title"=> $title
        ]);
    }

    public function setSubPainting($title, $paintingID) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO subpaintings (title, paintingID) values (:title, :paintingID)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":title"=> $title,
            ':paintingID'=> $paintingID
        ]);
    }

    public function setPress($title, $link, $internal) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO press (title, link, internal) values (:title, :link, :internal)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":title"=> $title,
            ":link"=> $link,
            ":internal"=> $internal
        ]);
    }
}