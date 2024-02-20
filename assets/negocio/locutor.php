<?php
class Locutor
{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $tono_de_voz;
    private $ciudad;
    private $provincia;
    private $pais;
    private $idioma;
    private $genero;
    private $edad_de_voz;
    private $llego_web;
    private $foto;
    private $fecha_nac;
    private $telefono;
    private $descripcion;
    private $experiencia_equi;
    private $metodo_pago;
    private $fecha_hora;
    private $habilitado;
    private $eliminado;

    public function __construct($id, $nombre, $apellido, $email, $password, $tono_de_voz, $ciudad, $provincia, $pais, $idioma, $genero, $edad_de_voz, $llego_web, $foto, $fecha_nac, $telefono, $descripcion, $experiencia_equi, $metodo_pago, $fecha_hora, $habilitado, $eliminado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;
        $this->tono_de_voz = $tono_de_voz;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->idioma = $idioma;
        $this->genero = $genero;
        $this->edad_de_voz = $edad_de_voz;
        $this->llego_web = $llego_web;
        $this->foto = $foto;
        $this->fecha_nac = $fecha_nac;
        $this->telefono = $telefono;
        $this->descripcion = $descripcion;
        $this->experiencia_equi = $experiencia_equi;
        $this->metodo_pago = $metodo_pago;
        $this->fecha_hora = $fecha_hora;
        $this->habilitado = $habilitado;
        $this->eliminado = $eliminado;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getTonoDeVoz()
    {
        return $this->tono_de_voz;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function getIdioma()
    {
        return $this->idioma;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getEdadDeVoz()
    {
        return $this->edad_de_voz;
    }

    public function getLlegoWeb()
    {
        return $this->llego_web;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getExperienciaEqui()
    {
        return $this->experiencia_equi;
    }

    public function getMetodoPago()
    {
        return $this->metodo_pago;
    }

    public function getFechaHora()
    {
        return $this->fecha_hora;
    }

    public function getHabilitado()
    {
        return $this->habilitado;
    }

    public function getEliminado()
    {
        return $this->eliminado;
    }

    // Setter methods
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setTonoDeVoz($tono_de_voz)
    {
        $this->tono_de_voz = $tono_de_voz;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setEdadDeVoz($edad_de_voz)
    {
        $this->edad_de_voz = $edad_de_voz;
    }

    public function setLlegoWeb($llego_web)
    {
        $this->llego_web = $llego_web;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setExperienciaEqui($experiencia_equi)
    {
        $this->experiencia_equi = $experiencia_equi;
    }

    public function setMetodoPago($metodo_pago)
    {
        $this->metodo_pago = $metodo_pago;
    }

    public function setFechaHora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;
    }

    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;
    }

    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;
    }
}
?>