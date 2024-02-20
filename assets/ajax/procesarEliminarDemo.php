<?php
session_start(); 
include_once("../negocio/controlador.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['email']) && isset($_POST['demo'])) { 
    $email = $_SESSION['email']; 
    $demo = $_POST['demo'];

    $controlador = new Controlador();
    $resultado = $controlador->eliminarDemo($email, $demo); 

    if ($resultado) {
        $response = [
            'success' => true,
            'message' => 'La demo se eliminó correctamente.'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'No se pudo eliminar la demo.'
        ];
    }
    echo json_encode($response);
} else {
    echo json_encode(['success' => false, 'message' => 'El usuario no ha iniciado sesión o no se proporcionó una demo para eliminar.']);
}
?>