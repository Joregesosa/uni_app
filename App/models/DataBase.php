<?php
require_once  "config/config.php";

class DataBase
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $port;
    public $conn;

    public function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant('DB');
        $this->user = constant('DB_USER');
        $this->pass = constant('DB_PASS');
        $this->port = constant('PORT');
 
        try {
 

            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db", $this->user, $this->pass);
 
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
