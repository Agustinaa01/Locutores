<?php
session_start();
include_once("../negocio/controlador.php");
$json = file_get_contents('php://input');
$data = json_decode($json);

$nombre = $data->nombre;
$apellido = $data->apellido;
$email = $data->email;
$fecha_nac = $data->fecha_nac;
$telefono = $data->telefono;
$ciudad = $data->ciudad;
$provincia = $data->provincia;
$password = $data->password;
$pais = $data->pais;
$llego_web = $data->llego_web;

$emailUsuario = $_SESSION['email']; 

$controlador = new Controlador();

$usuario = $controlador->editarUsuario($emailUsuario, $nombre, $apellido, $email, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web);

if ($usuario) {
  echo json_encode(['success' => true, 'message' => 'Usuario editado']);
} else {
  echo json_encode(['success' => false, 'message' => 'Usuario no editado']);
}
?>
