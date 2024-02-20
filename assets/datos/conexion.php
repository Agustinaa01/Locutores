<?php
class Conexion
{
    function conectar()
    {
        $server = "localhost"; 
        $base_datos = "hugoluis_locutores"; 
        $user = "hugoluis_locutores"; 
        $pass = "ozL1L6QwKNfA"; 
        $conn = new mysqli($server, $user, $pass, $base_datos);
        if ($conn->connect_errno) {
            echo ("Error al conectarse al servidor: " . $conn->connect_error);
        } else {
            $stm = $conn->prepare("SET time_zone = '-03:00';");
            $stm->execute();
        }

        return $conn;
    }

    function desconectar($conn)
    {
        $conn->close();
    }
}

?>