<?php
session_start();
class CategoriaControlador
{


    public function __construct()
    {
        require_once("Modelo/CategoriaModelo.php");
    }

    public function index()
    {
        if (isset($_SESSION['username'])) { //validar session

            //trae todos los categorias
            $categoria = new CategoriaModelo();
            $data["titulo"] = "categoria";
            $data["categoria"] = $categoria->getCategorias();

            require_once("Vista/categorias.php");
        } else {

            header('location: index.php');
        }
    }

    public function nuevo()
    {
        if (isset($_SESSION['username'])) { //validar session
            require_once("Vista/registrarCategorias.php");
        } else {

            header('location: index.php');
        }
    }

    public function guardarCategoria()
    {


        $nombre = $_POST['nombre'];

        $categoria = new CategoriaModelo();
        $ins = $categoria->insertar($nombre);
        $data["titulo"] = "Categoria";
        if ($ins) {
            echo "<script> alert('Categoria Guardada correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>¡Error al guardar, verifique la categoria que se intenta guardar! </strong>
                </div>
                </div>";
        }

        $this->index();
    }

    public function modificarCategoria($id)
    {
        if (isset($_SESSION['username'])) { //validar session

            $categoria = new CategoriaModelo();

            $data["id"] = $id;
            $data["categoria"] = $categoria->getCategoria($id);
            require_once "Vista/categoriaModificar.php";
        } else {

            header('location: index.php');
        }
    }

    public function modificar()
    {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $categoria = new CategoriaModelo();
        $ins = $categoria->modificar($id, $nombre);

        if ($ins) {
            echo "<script> alert('Categoria Modificada correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al guardar </strong>
                </div>
                </div>";
        }

        $this->index();
    }
}
