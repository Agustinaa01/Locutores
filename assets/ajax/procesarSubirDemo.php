<?php
session_start();
include_once("../negocio/controlador.php");

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $controlador = new Controlador();
    $usuario = $controlador->datosLocutor($email);

    // Comprueba si $usuario es un array y si tiene al menos un elemento
    if(is_array($usuario) && count($usuario) > 0) {
        // Accede al primer elemento del array
        $usuario = $usuario[0];

        $nombreOriginal = $_FILES['demo']['name'];
        $titulo = $_POST['title']; // Obtén el valor del campo de título

        $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

        $idUsuario = $usuario->getId();

        $rutaDeDestino = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'demos' . DIRECTORY_SEPARATOR;

        if (!is_dir($rutaDeDestino)) {
            mkdir($rutaDeDestino, 0777, true);
        }

        $nombrePersonalizado = $idUsuario . '_demo_' . time() . '.' . $extension;

        $rutaDeDestinoCompleta = $rutaDeDestino . $nombrePersonalizado;

        if (move_uploaded_file($_FILES['demo']['tmp_name'], $rutaDeDestinoCompleta)) {
            // Aquí pasamos el correo electrónico en lugar del ID
            $controlador->subirDemo($email, $nombrePersonalizado, $titulo); // Pasa el título a la función subirDemo

            echo json_encode(['success' => true, 'message' => 'Demo y título subidos y guardados en la base de datos']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al mover el archivo']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'No se encontraron datos de usuario.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'El usuario no ha iniciado sesión.']);
}
?>