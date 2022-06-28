<?php

class CategoriaModelo
{

    private $db;
    private $categoria;

    public function __construct()
    {

        $this->db = Conexion::conectar();
        $this->categoria = array();
    }


    public function getCategorias()
    {

        $sql = "SELECT * FROM categoria";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->categoria[] = $row;
        }

        return $this->categoria;
    }


    public function insertar($nombre)
    {
        $sql = "INSERT INTO categoria (nombre)
                                VALUES ('$nombre')";
        $resultado = $this->db->query($sql);
        return $resultado;

    }

    public function modificar($id, $nombre){
        
        $sql = "UPDATE categoria SET nombre='$nombre' WHERE id='$id'";

        $resultado = $this->db->query($sql);

        return $resultado;
    }

    public function getCategoria($id)
		{
			$sql = "SELECT * FROM categoria WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
}