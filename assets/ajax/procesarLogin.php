<?php
include_once("../negocio/controlador.php");

$json = file_get_contents('php://input');
$data = json_decode($json);

$email = $data->email;
$password = $data->password;

$controlador = new Controlador();

$login = $controlador->login($email, $password);

if ($login['result']) {
    session_start();
    $_SESSION['email'] = $email;
    echo json_encode(['success' => true, 'message' => 'Inicio de sesión realizado con éxito', 'userType' => $login['userType']]);
} else {
    echo json_encode(['success' => false, 'message' => 'Las credenciales proporcionadas no son válidas. Por favor, verifique su correo electrónico y contraseña']);
}
?>
