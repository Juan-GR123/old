<?php

namespace Models;

class Doctor
{

    function __construct(
        private string $id,
        private string $nombre,
        private string $apellidos,
        private string $telefono,
        private string $especialidad
    ) {}

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }


    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }
}


?>