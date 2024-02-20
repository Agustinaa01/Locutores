<?php
include_once("conexion.php");
include_once "../negocio/locutor.php";

class CatalogoLocutores {	

    function registerLocutor($nombre, $email, $apellido, $password, $pais)
    {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO locutores (nombre, email, apellido, password, pais) VALUES (?, ?, ?, ?, ?);";   
        $stm = $conn->prepare($query);
        
        $stm->bind_param("sssss", $nombre, $email, $apellido, $hashedPassword, $pais);
    
        $result = $stm->execute();
        
        $conexion->desconectar($conn);
        
        return $result;
    }

	function locutorExistente($email) {
    	$conexion = new Conexion();
    	$conn = $conexion->conectar();

    	$query = "SELECT COUNT(*) FROM locutores WHERE email = ?";
    	$stm = $conn->prepare($query);

    	$stm->bind_param("s", $email);
    	$stm->execute();

    	$result = $stm->get_result();
    	$row = $result->fetch_assoc();

    	$conexion->desconectar($conn);

    	return $row['COUNT(*)'] > 0;
    }

    
    function datosLocutor($email)
    {   
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        
        $query = "SELECT * FROM locutores WHERE email = ?;";   
        $stm = $conn->prepare($query);
        
        $stm->bind_param("s", $email); 

        $stm->execute();
        $result = $stm->get_result();
        
        $locutores = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $locutor = new Locutor(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido'],
                    $row['email'],
                    $row['password'],
                    $row['tono_de_voz'],
                    $row['ciudad'],
                    $row['provincia'],
                    $row['pais'],
                    $row['idioma'],
                    $row['genero'],
                    $row['edad_de_voz'],
                    $row['llego_web'],
                    $row['foto'],
                    $row['fecha_nac'],
                    $row['telefono'],
                    $row['descripcion'],
                    $row['experiencia_equi'],
                    $row['metodo_pago'],
                    $row['fecha_hora'],
                    $row['habilitado'], 
                    $row['eliminado']
                );
                $locutores[] = $locutor;
            }
        }
        $conexion->desconectar($conn);
        return $locutores; 
    }

    function editarLocutor($emailUsuario, $nombre, $apellido, $email, $tono_voz, $genero_voz, $edad_voz, $idioma, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web, $descripcion) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        // Recupera los datos actuales del usuario
        $query = "SELECT * FROM locutores WHERE email = ?";
        $stm = $conn->prepare($query);
        $stm->bind_param("s", $emailUsuario);
        $stm->execute();
        $result = $stm->get_result();
        $usuarioActual = $result->fetch_assoc();

        // Usa los datos actuales si no se proporcionaron nuevos
        $nombre = $nombre ?: $usuarioActual['nombre'];
        $apellido = $apellido ?: $usuarioActual['apellido'];
        $email = $email ?: $usuarioActual['email'];
        $tono_voz = $tono_voz ?: $usuarioActual['tono_voz'];
        $genero_voz = $genero_voz ?: $usuarioActual['genero_voz'];
        $edad_voz = $edad_voz ?: $usuarioActual['edad_voz'];
        $idioma = $idioma ?: $usuarioActual['idioma'];
        $fecha_nac = $fecha_nac ?: $usuarioActual['fecha_nac'];
        $telefono = $telefono ?: $usuarioActual['telefono'];
        $ciudad = $ciudad ?: $usuarioActual['ciudad'];
        $provincia = $provincia ?: $usuarioActual['provincia'];
        $hashedPassword = $password ? password_hash($password, PASSWORD_DEFAULT) : $usuarioActual['password'];
        $pais = $pais ?: $usuarioActual['pais'];
        $llego_web = $llego_web ?: $usuarioActual['llego_web'];
        $descripcion = $descripcion ?: $usuarioActual['descripcion'];

        $query = "UPDATE locutores SET nombre = ?, apellido = ?, email = ?, tono_de_voz = ?, genero = ?, edad_de_voz = ?, idioma = ?, fecha_nac = ?, telefono = ?, ciudad = ?, provincia = ?, password = ?, pais = ?, llego_web = ?, descripcion = ? WHERE email = ?";

        $stm = $conn->prepare($query);
        $stm->bind_param("ssssssssssssssss", $nombre, $apellido, $email, $tono_voz, $genero_voz, $edad_voz, $idioma, $fecha_nac, $telefono, $ciudad, $provincia, $hashedPassword, $pais, $llego_web, $descripcion, $emailUsuario);

        $stm->execute();

        $result = $stm->execute();

        $conexion->desconectar($conn);

        return $result;   
    }

    function subirDemo($email, $demo, $titulo)
    {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $query = "INSERT INTO demos (id_locutor, demo, titulo, habilitado) VALUES ((SELECT id FROM locutores WHERE email = ?), ?, ?, 1)";
        $stm = $conn->prepare($query);

        $stm->bind_param("sss", $email, $demo, $titulo); 

        $stm->execute();

        $stm->close();
        $conexion->desconectar($conn);
        return $demo;
    }


    function obtenerDemos($email) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $query = "SELECT demo, titulo FROM demos WHERE id_locutor = (SELECT id FROM locutores WHERE email = ?) AND habilitado = 1";
        $stm = $conn->prepare($query);

        $stm->bind_param("s", $email);

        $stm->execute();

        $result = $stm->get_result();
        $demos = $result->fetch_all(MYSQLI_ASSOC);

        $stm->close();
        $conexion->desconectar($conn);

        return $demos;
    }

    function eliminarDemo($email, $demo) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $query = "UPDATE demos SET habilitado = 0 WHERE id_locutor = (SELECT id FROM locutores WHERE email = ?) AND demo = ?";
        $stm = $conn->prepare($query);

        $stm->bind_param("ss", $email, $demo);

        $stm->execute();

        $resultado = $stm->affected_rows > 0;

        $stm->close();
        $conexion->desconectar($conn);

        return $resultado;
    }




}
?>