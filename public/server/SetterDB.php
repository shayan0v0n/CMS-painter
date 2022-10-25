<?php namespace Server;
ini_set("display_errors", "off");
use Server\Database;


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

    public function setExhibition($title, $location, $date, $place) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO exhibitions (title, location, date, place) values (:title, :location, :date, :place)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":title"=> $title,
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

    public function updateBiographyImage($link) {
        $currentPDO = $this-> pdo;
        $sql = "UPDATE biography SET img_link = :imgLink WHERE id = 1";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":imgLink"=> "$link"
        ]);
    }

    public function updateBiographyInfo($bioInfoUserName, $bioInfoWhereBorn, $bioInfoWhenBorn, $bioInfoWhenLiveAndWork) {
        $currentPDO = $this-> pdo;
        $sql = "UPDATE biography SET fullName = :fullName, where_born = :where_born, when_born = :when_born, when_live_and_work = :when_live_and_work WHERE id = 1";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":fullName" => $bioInfoUserName,
            ":where_born" => $bioInfoWhereBorn,
            ":when_born" => $bioInfoWhenBorn,
            ":when_live_and_work" => $bioInfoWhenLiveAndWork
        ]);
    }

    public function addEducationList($whenEducation, $descriptionEducation) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO `eductions` (date, description) VALUES (:date, :description)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":date" => $whenEducation,
            ":description" => $descriptionEducation
        ]);
    }

    public function addTeachingList($whenTeachings, $descriptionTeachings) {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO `teachings` (date, description) VALUES (:date, :description)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            ":date" => $whenTeachings,
            ":description" => $descriptionTeachings
        ]);
    }

    public function setBioDefault() {
        $currentPDO = $this-> pdo;
        $sql = "INSERT INTO `biography` (id, fullName, where_born, when_born, when_live_and_work, img_link) VALUES (:id, :fullName, :where_born, :when_born, :when_live_and_work, :img_link)";
        $statement = $currentPDO->prepare($sql);
        $statement-> execute([
            "id" => 1,
            "fullName" => "----",
            "where_born" => "----",
            "when_born" => "----",
            "when_live_and_work" => "----", 
            "img_link" => "biographyImgdisplay.jpg"
        ]);
    }

    public function deleteCustomData($tableType, $conditionType, $conditionValue) {
        $currentPDO = $this-> pdo;
        $sql = "DELETE FROM $tableType WHERE $conditionType = '$conditionValue'";
        $statement = $currentPDO-> query($sql);
        $statement-> execute();
    }
}