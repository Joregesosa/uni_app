<?php
/* model user */
require_once   "./App/models/DataBase.php";
class User
{
    private $conn;

    function __construct()
    {
        $database = new DataBase;
        $this->conn = $database->conn;
    }


    function Edit($query, $params)
    {

        try {

            $stm = $this->conn->prepare($query);

            $stm->execute($params);

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
