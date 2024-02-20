<?php
	include("../datos/catalogo_usuario.php");
	include("../datos/catalogo_locutores.php");
	class Controlador {	
		function login($email, $password)
		{
			$catUsu = new CatalogoUsuarios();
			$login = $catUsu->login($email, $password);
			return $login;
		}

		function getPaises()
		{
			$catUsu = new CatalogoUsuarios();
			$paises = $catUsu->getPaises();
			return $paises;
		}

		//Cliente
		function verificarClienteExistente($email) {
			$catUsu = new CatalogoUsuarios();
			$usuarioExistente = $catUsu->clienteExistente($email);
			return $usuarioExistente;
		}

		function registerCliente($nombre, $email, $apellido, $password, $pais)
		{
			$catUsu = new CatalogoUsuarios();
			$registroExitoso = $catUsu->registerCliente($nombre, $email, $apellido, $password, $pais);
			return $registroExitoso;
		}

		function datosCliente($email){
			$catUsu = new CatalogoUsuarios();
			$cliente = $catUsu->datosCliente($email);
			return $cliente;
		}

		function editarUsuario($emailUsuario, $nombre, $apellido, $email, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web){
			$catUsu = new CatalogoUsuarios();
			$cliente = $catUsu->editarUsuario($emailUsuario, $nombre, $apellido, $email, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web);
			return $cliente;
		}


		//Locutor
		function verificarLocutorExistente($email) {
			$catUsu = new CatalogoLocutores();
			$usuarioExistente = $catUsu->locutorExistente($email);
			return $usuarioExistente;
		}

		function registerLocutor($nombre, $email, $apellido, $password, $pais)
		{
			$catUsu = new CatalogoLocutores();
			$registroExitoso = $catUsu->registerLocutor($nombre, $email, $apellido, $password, $pais);
			return $registroExitoso;
		}

		function datosLocutor($email){
			$catUsu = new CatalogoLocutores();
			$locutor = $catUsu->datosLocutor($email);
			return $locutor;
		}

		function editarLocutor($emailUsuario, $nombre, $apellido, $email, $tono_voz, $genero_voz, $edad_voz, $idioma, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web, $descripcion){
		    $catUsu = new CatalogoLocutores();
		    $cliente = $catUsu->editarLocutor($emailUsuario, $nombre, $apellido, $email, $tono_voz, $genero_voz, $edad_voz, $idioma, $fecha_nac, $telefono, $ciudad, $provincia, $password, $pais, $llego_web, $descripcion);
		    return $cliente;
		}

		function subirDemo($email, $demo, $title){
		    $catUsu = new CatalogoLocutores();
		    $usuario = $catUsu->subirDemo($email, $demo, $title); // Pasa el título a la función subirDemo
		    return $usuario;
		}

		function obtenerDemos($email) {
		    $catUsu = new CatalogoLocutores();
		    $demos = $catUsu->obtenerDemos($email);
		    return $demos;
		}

		function eliminarDemo($email, $demo) {
	        $catUsu = new CatalogoLocutores();
	        $resultado = $catUsu->eliminarDemo($email, $demo);
	        return $resultado;
	    }



	}
?>