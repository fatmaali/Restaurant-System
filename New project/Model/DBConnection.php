<?php


class Connection {

    public $host = "localhost";
    public $dbname = "teq_bp";
    public $user = "teq_ehab";
    public $pass = "g4s=8^]VT2TA";
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