<?php
// models/Paciente.php

namespace Models;

use Lib\BaseDatos;
use PDO;

class Paciente extends BaseDatos {
    private $table = 'pacientes';

    public function __construct(   
    private string $id,
    private string $nombre,
    private string $apellidos,
    private string $correo,
    private string $password,) 
    {
        parent::__construct();
        $this->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->getConnection()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}