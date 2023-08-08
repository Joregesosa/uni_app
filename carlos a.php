<?php
// Incluye el archivo de conexión
include('conecction.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {

        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];

        // print_r($_POST);

        // Insertar los datos en la tabla usuarios_datos
        $query = "INSERT INTO usuarios_datos (dni,nombre, apellidos,direccion, fecha_nacimiento, rol_id) VALUES ('$dni','$nombre', '$apellidos','$direccion',$fecha_nacimiento, 3)";
        $resultado = $mysqli->query($query);


        exit();
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    }
}

function insert()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        try {

            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $direccion = $_POST['direccion'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];

            $query = "INSERT INTO usuarios_datos (dni,nombre, apellidos,direccion, fecha_nacimiento, rol_id) VALUES ('$dni','$nombre', '$apellidos','$direccion',$fecha_nacimiento, 3)";

            $resultado = $mysqli->query($query);


            exit();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}

function select()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        try {

            $query = "SELECT dni,nombre, apellidos,direccion, fecha_nacimiento, rol_id, email FROM usuarios_datos LEFT JOIN usuarios_login ON usuarios_datos.id = usuarios_login.id_us" ;

            $resultado = $mysqli->query($query);
            
            exit();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}
