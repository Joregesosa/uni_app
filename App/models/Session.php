<?php
require_once   "./App/models/DataBase.php";

class Session
{

    public $conn;

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


    // function changePassword()
    // {
    //     $this->getConn();

    //     try {

    //         $stm = $this->conn->prepare("UPDATE users set `pass`=? WHERE `id`=?");

    //         for ($i=0; $i < 30; $i++) { 
    //            $hash = password_hash('123456', PASSWORD_DEFAULT);
    //             $stm->execute([$hash, $i]);
    //         }

    //         $this->conn = null;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //     }
    // }
}
