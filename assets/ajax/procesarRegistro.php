<?php
include_once("../negocio/controlador.php");

$json = file_get_contents('php://input');
$data = json_decode($json);

$nombre = $data->nombre;
$apellido = $data->apellido;
$email = $data->email;
$pais = $data->pais;
$password = $data->password;
$verify_password = $data->verify_password;
$esCliente = $data->esCliente;  

$controlador = new Controlador();

if ($password != $verify_password) {
    echo json_encode(['success' => false, 'message' => 'Las contraseñas no coinciden']);
} else {
    $usuarioExistenteCliente = $controlador->verificarClienteExistente($email);
    $usuarioExistenteLocutor = $controlador->verificarLocutorExistente($email);

    if ($usuarioExistenteCliente || $usuarioExistenteLocutor) {
        echo json_encode(['success' => false, 'message' => 'El correo electrónico ya está en uso']);
    } else {
        if ($esCliente) {
            $registroExitoso = $controlador->registerCliente($nombre, $email, $apellido, $password, $pais);
        } else {
            $registroExitoso = $controlador->registerLocutor($nombre, $email, $apellido, $password, $pais);
        }

        if ($registroExitoso) {
            echo json_encode(['success' => true, 'message' => 'Registro exitoso']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error en el registro']);
        }
    }
}
?>
