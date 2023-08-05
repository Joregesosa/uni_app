<?php
/* model user */
require_once   "./App/models/DataBase.php";
class User
{
    public $conn;

    function getConn()
    {
        $database = new DataBase;
        $this->conn = $database->conn;
    }


    function create_user($email, $name, $pass)
    {
        $this->getConn();

        try {

            $stm = $this->conn->prepare("INSERT INTO `users`(`email`,`name`, `pass`) VALUE(?,?,?)");

            $stm->execute([$email, $name, $pass]);

            $this->conn = null;
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }


   
}
