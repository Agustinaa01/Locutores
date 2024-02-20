<?php
session_start(); 
include_once("../negocio/controlador.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['email'])) { 
    $email = $_SESSION['email']; 

    $controlador = new Controlador();
    $usuario = $controlador->datosCliente($email); 
    $paises = $controlador->getPaises();
    if ($usuario) {
        $response = [
            'success' => true,
            'nombre' => $usuario->getNombre() ? $usuario->getNombre() : '-',
            'apellido' => $usuario->getApellido() ? $usuario->getApellido() : '-',
            'email' => $usuario->getEmail() ? $usuario->getEmail() : '-',
            'password' => $usuario->getPassword() ? $usuario->getPassword() : '-',
            'pais' => $usuario->getPais() ? $usuario->getPais() : '-',
            'provincia' => $usuario->getProvincia() ? $usuario->getProvincia() : '-',
            'ciudad' => $usuario->getCiudad() ? $usuario->getCiudad() : '-',
            'telefono' => $usuario->getTelefono() ? $usuario->getTelefono() : '-',
            'llego_web' => $usuario->getLlegoWeb() ? $usuario->getLlegoWeb() : '-',
            'fecha_nac' => $usuario->getFechaNac() ? $usuario->getFechaNac() : '-'
        ];
        echo json_encode($response);
    } else {
        $response = [
            'success' => false,
            'message' => 'No se encontraron datos de usuario.'
        ];
        echo json_encode($response);
    }
    
} else {
    echo json_encode(['success' => false, 'message' => 'El usuario no ha iniciado sesión.']);
}
?>
