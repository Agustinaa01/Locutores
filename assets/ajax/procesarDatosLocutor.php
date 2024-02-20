<?php
session_start(); 
include_once("../negocio/controlador.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['email'])) { 
    $email = $_SESSION['email']; 

    $controlador = new Controlador();
    $locutor = $controlador->datosLocutor($email); 

    if ($locutor) {
        $demos = $controlador->obtenerDemos($email); // Obtener los demos

        $response = [
            'nombre' => $locutor[0]->getNombre() ?: '-',
            'apellido' => $locutor[0]->getApellido() ?: '-',
            'ciudad' => $locutor[0]->getCiudad() ?: '-',
            'descripcion' => $locutor[0]->getDescripcion() ?: '-',
            'edad_de_voz' => $locutor[0]->getEdadDeVoz() ?: '-',
            'email' => $locutor[0]->getEmail() ?: '-',
            'experiencia_equi' => $locutor[0]->getExperienciaEqui() ?: '-',
            'fecha_nac' => $locutor[0]->getFechaNac() ?: '-',
            'foto' => $locutor[0]->getFoto() ?: '-',
            'genero' => $locutor[0]->getGenero() ?: '-',
            'idioma' => $locutor[0]->getIdioma() ?: '-',
            'llego_web' => $locutor[0]->getLlegoWeb() ?: '-',
            'metodo_pago' => $locutor[0]->getMetodoPago() ?: '-',
            'nombre' => $locutor[0]->getNombre() ?: '-',
            'pais' => $locutor[0]->getPais() ?: '-',
            'password' => $locutor[0]->getPassword() ?: '-',
            'provincia' => $locutor[0]->getProvincia() ?: '-',
            'telefono' => $locutor[0]->getTelefono() ?: '-',
            'tono_voz' => $locutor[0]->getTonoDeVoz() ?: '-',
            'demos' => $demos ?: [], // Agregado el campo 'demos'
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
