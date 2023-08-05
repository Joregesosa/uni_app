<?php

require_once   "./App/models/DataBase.php";

class Admin
{
    private $conn;

    public function __construct()
    {
        $database = new DataBase;
        $this->conn = $database->conn;
    }

    function List($query)
    {

        try {

            $stm = $this->conn->prepare($query);

            $stm->execute();

            while ($res = $stm->fetch(PDO::FETCH_ASSOC)) {

                $teachers[] = $res;
            }
             
            return $teachers;

            $this->conn = null;
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
}
