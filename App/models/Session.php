<?php
require_once   "./App/models/DataBase.php";

class Session
{

    private $conn;

    function getConn()
    {
        $database = new DataBase;
        $this->conn = $database->conn;
    }


    function login($email, $password)
    {
        $this->getConn();

        try {

            $stm = $this->conn->prepare("SELECT * FROM `login` WHERE email = ? AND `state` = ?");

            $stm->execute([$email, 1]);

            $rowCounter = $stm->rowCount();

            $res = $stm->fetch(PDO::FETCH_ASSOC);

            if ($rowCounter === 1) :

                return $res;

            endif;

            $this->conn = null;
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
}
