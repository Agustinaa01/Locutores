<?php
class Cliente{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $ciudad;
    private $provincia;
    private $pais;
    private $telefono;
    private $fecha_nac;
    private $llego_web;
    private $habilitado;
    private $eliminado;      
    private $fecha_hora;

    public function __construct($id, $nombre, $apellido, $email, $password, $ciudad, $provincia, $pais, $telefono, $fecha_nac, $llego_web, $habilitado, $eliminado, $fecha_hora)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->pais = $pais;
        $this->telefono = $telefono;
        $this->fecha_nac = $fecha_nac;
        $this->llego_web = $llego_web;
        $this->habilitado = $habilitado;
        $this->eliminado = $eliminado;      
        $this->fecha_hora = $fecha_hora;
    }
    
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

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    public function getLlegoWeb()
    {
        return $this->llego_web;
    }

    public function getHabilitado()
    {
        return $this->habilitado;
    }

    public function getEliminado()
    {
        return $this->eliminado;
    }

    public function getFechaHora()
    {
        return $this->fecha_hora;
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

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;
    }

    public function setLlegoWeb($llego_web)
    {
        $this->llego_web = $llego_web;
    }

    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;
    }

    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;
    }

    public function setFechaHora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;
    }

}
?>