<?php
include_once("../negocio/controlador.php");

$controlador = new Controlador();
$paises = $controlador->getPaises();

// Ordenar los países alfabéticamente
usort($paises, function($a, $b) {
    return strcmp(strtolower($a->getNombre()), strtolower($b->getNombre()));
});

$combo_paises = "";

foreach ($paises as $pais) {
    $nombre = $pais->getNombre();
    $nombre = utf8_encode($nombre);
    $nombreCodificado = htmlspecialchars($nombre, ENT_COMPAT, 'UTF-8');
    $selected = "";
    if (strtolower($nombre) === "argentina") {
        $selected = "selected"; // Marcar Argentina como seleccionada
    }
    $combo_paises .= "<option value='$nombreCodificado' $selected>" . ucwords(strtolower($nombre)) . "</option>";
}

echo $combo_paises;
?>
