<?php


class Connection {

    public $host = "localhost";
    public $dbname = "bp";
    public $user = "root";
    public $pass = "";
    public $Conn;

    function __construct() {

        try {

            $this->Conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function closeConnection() {

        $this->Conn = null;
    }
}
?>