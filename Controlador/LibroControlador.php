<?php

class LibroControlador
{


    public function __construct()
    {
        require_once("Modelo/LibroModelo.php");
        require_once("Modelo/CategoriaModelo.php");
    }

    public function index()
    {
        //trae todos los libros
        $libro = new LibroModelo();
        $data["titulo"] = "Libro";
        $data["libro"] = $libro->getLibros();

        //$categoriaL = new CategoriaModelo();
        //$cat["categoriaL"] = $categoriaL->getCategorias();
        
        require("Vista/libros.php");
    }

    public function nuevo()
    {
        $categoria = new CategoriaModelo();
        $data["categoria"] = $categoria->getCategorias();
        require_once("Vista/registrarLibros.php");
    }

    public function guardarLibro()
    {


        $isbn = $_POST['isbn'];
        $ejemplar = $_POST['ejemplar'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $n_paginas = $_POST['n_paginas'];


        $libro = new LibroModelo();


        $ins = $libro->insertar($isbn, $ejemplar, $nombre, $categoria, $n_paginas);

        if ($ins) {
            echo "<script> alert('Libro Guardado correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>¡Error al guardar, verifique los datos que se intenta registrar! </strong>
                </div>
                </div>";
        }

        $this->index();
    }

    public function modificarLibro($isbn, $ejemplar)
    {

        $categoria = new CategoriaModelo();
        $dataC["categoria"] = $categoria->getCategorias();
        $libro = new LibroModelo();
        $data["libro"] = $libro->getLibro($isbn, $ejemplar);

        
        
        require_once "Vista/libroModificar.php";
    }

    public function modificar()
    {

        $isbnM = $_POST['isbnM'];
        $ejemplarM = $_POST['ejemplarM'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $n_paginas = $_POST['n_paginas'];
        //isbn y codigo ejemplar originales
        $isbn = $_POST['isbn'];
        $ejemplar = $_POST['ejemplar'];


        $libro = new LibroModelo();
        $ins = $libro->modificar($isbnM, $ejemplarM, $nombre, $categoria, $n_paginas, $isbn, $ejemplar);

        if ($ins) {
            echo "<script> alert('Libro Modificado correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>¡Error al guardar, verifique los datos que se intenta modificar! </strong>
                </div>
                </div>";
        }

        $this->index();
    }
}
