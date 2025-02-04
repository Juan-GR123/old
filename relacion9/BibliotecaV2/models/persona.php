<?php
// MODELO DE PERSONAS

class Persona {

    private $db;

    // Constructor. Conecta con la base de datos.
    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "biblioteca");
    }

    // Devuelve todas las personas de la base de datos en forma de array de objetos
    public function getAll() {
        $result = $this->db->query("SELECT * FROM personas");
        $listaPers = array();
        while ($fila = $result->fetch_object()) {
            $listaPers[] = $fila;
        }
        return $listaPers;
    }

    // Devuelve un array con los ids de los autores de un libro
    public function getAutores($idLibro) {
        // Obtenemos solo los autores del libro que estamos buscando
        $autoresLibro = $this->db->query("SELECT idPersona FROM escriben WHERE idLibro = '$idLibro'");
        // Vamos a convertir esa lista de autores del libro en un array de ids de personas
        $listaAutoresLibro = array();
        while ($autor = $autoresLibro->fetch_object()) {
            $listaAutoresLibro[] = $autor->idPersona;
        }
        return $listaAutoresLibro;
    }
    
    public function insert($nombre, $apellido)
    {
        $this->db->query("INSERT INTO personas (nombre,apellido) VALUES ('$nombre','$apellido')");
        return $this->db->affected_rows;
    }

    public function insertAutores($idPersona, $libros)
    {
        $correctos = 0;
        foreach ($libros as $idLibro) {
            $this->db->query("INSERT INTO escriben(idPersona, idLibro) VALUES('$idPersona', '$idLibro')");
            if ($this->db->affected_rows == 1) $correctos++;
        }
        return $correctos;
    }

    public function getMaxId()
    {
        $result = $this->db->query("SELECT MAX(idPersona) AS ultimoIdPersona FROM personas");
        $idPersona = $result->fetch_object()->ultimoIdPersona;
        return $idPersona;
    }

    public function delete($idPersona)
    {
        $this->db->query("DELETE FROM personas WHERE idPersona = '$idPersona'");
        return $this->db->affected_rows;
    }

    public function get($id)
    {
        $result = $this->db->query("SELECT * FROM personas WHERE personas.idPersona = '$id'");
        $autor= $result->fetch_object();
        return $autor;
    }

    public function update($idPersona, $nombre, $apellido)
    {
        $this->db->query("UPDATE personas SET
            nombre = '$nombre',
            apellidos = '$apellido',
            WHERE idPersona = '$idPersona'");
        return $this->db->affected_rows;
    }

    public function search($textoBusqueda)
    {
        // Buscamos los libros de la biblioteca que coincidan con el texto de búsqueda
        $result = $this->db->query("SELECT * FROM personas
					INNER JOIN escriben ON personas.idPersona = escriben.idPersona
					WHERE personas.nombre LIKE '%$textoBusqueda%'
					OR personas.apellido LIKE '%$textoBusqueda%'
					ORDER BY persona.nombre");
        $listaAutores = array();
        while ($fila = $result->fetch_object()) {
            $listaAutores[] = $fila;
        }
        return $listaAutores;
    }
}   