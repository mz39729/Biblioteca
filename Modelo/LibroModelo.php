<?php

class LibroModelo
{

    private $db;
    private $libro;

    public function __construct()
    {

        $this->db = Conexion::conectar();
        $this->libro = array();
    }


    public function getLibros()
    {

        $sql = "SELECT libro.*,categoria.nombre 
        FROM libro, categoria
        WHERE libro.categoria = categoria.id  
        AND NOT EXISTS (SELECT * 
                        FROM prestamo
                          WHERE libro.ejemplar = prestamo.libro_ejemplar 
                          AND libro.ISBN = prestamo.libro_ISBN)";

       /* $sql = "SELECT libro.*,categoria.nombre 
        FROM libro, categoria 
        WHERE libro.categoria=categoria.id";*/
        
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->libro[] = $row;
        }

        return $this->libro;
    }


    public function insertar($isbn, $ejemplar, $nombre, $categoria, $n_paginas)
    {
        $sql = "INSERT INTO libro (ISBN, ejemplar, nombre_libro, categoria, n_paginas)
                                VALUES ('$isbn', '$ejemplar', '$nombre', '$categoria', '$n_paginas')";
        $resultado = $this->db->query($sql);
        return $resultado;

    }

    public function modificar($isbnM, $ejemplarM, $nombre, $categoria, $n_paginas, $isbn, $ejemplar){

        $sql = "UPDATE libro SET ISBN='$isbnM', ejemplar='$ejemplarM', nombre_libro='$nombre',
                                categoria='$categoria',n_paginas='$n_paginas' WHERE ISBN='$isbn' AND ejemplar='$ejemplar'";

        $resultado = $this->db->query($sql);

        return $resultado;
    }

    public function getLibro($isbn, $ejemplar)
		{
			$sql = "SELECT libro.*,categoria.nombre 
            FROM libro, categoria 
            WHERE ISBN='$isbn' 
            AND ejemplar='$ejemplar' 
            AND libro.categoria=categoria.id LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}

        public function getLibroP($isbn)
		{
			$sql = "SELECT * 
            FROM libro
            WHERE ISBN='$isbn'";
			$resultado = $this->db->query($sql);

			return $resultado;
		}

}