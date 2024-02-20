<?php
include_once("conexion.php");
include_once "../negocio/cliente.php";
include_once "../negocio/paises.php";

class CatalogoUsuarios {	

    function registerCliente($nombre, $email, $apellido, $password, $pais)
    {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO clientes (nombre, email, apellido, password, pais) VALUES (?, ?, ?, ?, ?);";   
        $stm = $conn->prepare($query);
        
        $stm->bind_param("sssss", $nombre, $email, $apellido, $hashedPassword, $pais);
    
        $result = $stm->execute();
        
        $conexion->desconectar($conn);
        
        return $result;
    }


	function clienteExistente($email) {
    	$conexion = new Conexion();
    	$conn = $conexion->conectar();

    	$query = "SELECT COUNT(*) FROM clientes WHERE email = ?;";
    	$stm = $conn->prepare($query);

    	$stm->bind_param("s", $email);
    	$stm->execute();

    	$result = $stm->get_result();
    	$row = $result->fetch_assoc();

    	$conexion->desconectar($conn);

    	return $row['COUNT(*)'] > 0;
	}

    function getPaises()
    {   
        $paises = array();

        $conexion = new Conexion();
        $conn = $conexion->conectar();
        
        $query = "SELECT * FROM paises;";   
        $stm = $conn->prepare($query);
        
        $stm->bind_result($id, $nombre);
            
        $stm->execute();

        while($stm->fetch())
        {
            $pais = new Paises($id, $nombre); 
            $paises[] = $pais;
        }
        
        $conexion->desconectar($conn);
        return $paises;
    }

    function login($email, $password)
    {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $queryClientes = "SELECT * FROM clientes WHERE email = ?;";
        $stmClientes = $conn->prepare($queryClientes);
        $stmClientes->bind_param("s", $email);
        $stmClientes->execute();
        $resultClientes = $stmClientes->get_result(); // Obtener resultados

        $queryLocutores = "SELECT * FROM locutores WHERE email = ?;";
        $stmLocutores = $conn->prepare($queryLocutores);
        $stmLocutores->bind_param("s", $email);
        $stmLocutores->execute();
        $resultLocutores = $stmLocutores->get_result();

        if ($resultClientes && $resultClientes->num_rows > 0) {
            $cliente = $resultClientes->fetch_assoc();
            if (password_verify($password, $cliente['password'])) {
                $result = true;
                $userType = 'cliente';
            } else {
                $result = false;
                $userType = '';
            }
        } elseif ($resultLocutores && $resultLocutores->num_rows > 0) {
            $locutor = $resultLocutores->fetch_assoc();
            if (password_verify($password, $locutor['password'])) {
                $result = true;
                $userType = 'locutor';
            } else {
                $result = false;
                $userType = '';
            }
        } else {
            $result = false;
            $userType = '';
        }

        // Cerrar los resultados
        $stmClientes->close();
        $stmLocutores->close();

        $conexion->desconectar($conn);
        return ['result' => $result, 'userType' => $userType];
    }


    function datosCliente($email)
    {   
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        
        $query = "SELECT * FROM clientes WHERE email = ?;";   
        $stm = $conn->prepare($query);
        
        $stm->bind_param("s", $email); 
        
        $stm->execute();
        $result = $stm->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $cliente = new Cliente(
                $row['id'],
                $row['nombre'],
                $row['apellido'],
                $row['email'],
                $row['password'],
                $row['ciudad'],
                $row['provincia'],
                $row['pais'],
                $row['telefono'],
                $row['fecha_nac'],
                $row['llego_web'],
                $row['habilitado'], 
                $row['eliminado'], 
                $row['fecha_hora'] 
            );

            return $cliente;
        } else {
            return null;
        }
        $conexion->desconectar($conn);
    }


    function editarUsuario($emailUsuario, $nombre, $apellido, $email, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        // Recupera la fecha de nacimiento y la contraseña actuales del usuario
        $query = "SELECT fecha_nac, password FROM clientes WHERE email = ?";
        $stm = $conn->prepare($query);
        $stm->bind_param("s", $emailUsuario);
        $stm->execute();
        $result = $stm->get_result();
        $usuarioActual = $result->fetch_assoc();

        // Usa la fecha de nacimiento y la contraseña actuales si no se proporcionaron nuevas
        $fecha_nac = $fecha_nac ?: $usuarioActual['fecha_nac'];
        $hashedPassword = $password ? password_hash($password, PASSWORD_DEFAULT) : $usuarioActual['password'];

        $query = "UPDATE clientes SET nombre = ?, apellido = ?, email = ?, fecha_nac = ?, telefono = ?, ciudad = ?, provincia = ?, password = ?, pais = ?, llego_web = ? WHERE email = ?";

        $stm = $conn->prepare($query);
        $stm->bind_param("sssssssssss", $nombre, $apellido, $email, $fecha_nac, $telefono, $ciudad, $provincia, $hashedPassword, $pais, $llego_web, $emailUsuario);

        $stm->execute();

        $result = $stm->execute();

        $conexion->desconectar($conn);

        return $result;   
    }



}
?>