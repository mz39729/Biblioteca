<?php
session_start();


class PrestamoControlador
{


    public function __construct()
    {
        require_once("Modelo/LibroModelo.php");
        require_once("Modelo/UsuarioModelo.php");
        require_once("Modelo/PrestamoModelo.php");
        require_once("Controlador/LibroControlador.php");
    }


    public function index()
    {
        if (isset($_SESSION['username'])) {

            $prestamo = new PrestamoModelo();
            $data["prestamo"] = $prestamo->getPrestamos();

            require_once("Vista/prestamos.php");
        } else {

            header('location: index.php');
        }
    }


    public function prestar($isbn, $ejemplar)
    {
        //trae todos los libros y usuarios para mostrarlo en lista
        /*$libro = new LibroModelo();
        $dataLibro["libro"] = $libro->getLibro($isbn, $ejemplar);

        $usuario = new UsuarioModelo();
        $dataUsuario["usuario"] = $usuario->usuariosActivos();

        require_once("Vista/prestarLibro.php");*/

        if (isset($_SESSION['username'])) { //validar session

            $prestamo = new PrestamoModelo();
            $nPrestamos = $prestamo->getPrestamo($isbn)->num_rows;

            $libro = new LibroModelo();
            $nLibro = $libro->getLibroP($isbn)->num_rows;

            if (($nLibro - $nPrestamos) > 2) {
                $dataLibro["libro"] = $libro->getLibro($isbn, $ejemplar);

                $usuario = new UsuarioModelo();
                $dataUsuario["usuario"] = $usuario->usuariosActivos();

                require_once("Vista/prestarLibro.php");
            } else {
                echo "<div id='success'>
        <div class='alert alert-danger'>
        <strong>No se puede prestar mas ejemplares de este libro</strong>
        </div>
        </div>";
            }
            $libro = new LibroControlador();
            $libro->index();
        } else {

            header('location: index.php');
        }
    }

    public function prestamo()
    {
        $cedula = $_POST['cedula'];
        $isbn = $_POST['isbn'];
        $ejemplar = $_POST['ejemplar'];
        $fecha = date('Y-m-d');;

        $prestamo = new PrestamoModelo();
        $consulta["prestamo"] = $prestamo->consultarPrestamo($cedula);

        if ($consulta["prestamo"]['cont'] >= 1 && $consulta["prestamo"]['tipo'] == "E") {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al prestar, El estudiante " . $consulta["prestamo"]['nombre'] . " no puede prestar mas libros.</strong>
                </div>
                </div>";
        } else if ($consulta["prestamo"]['cont'] >= 4 && $consulta["prestamo"]['tipo'] == "P") {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al prestar, El Profesor " . $consulta["prestamo"]['nombre'] . " no puede prestar mas libros.</strong>
                </div>
                </div>";
        } else {
            $ins = $prestamo->prestamo($isbn, $ejemplar, $cedula, $fecha);

            if ($ins) {
                echo "<script> alert('Libro Prestado correctamente'); </script>";
            } else {
                echo "<div id='success'>
                    <div class='alert alert-danger'>
                    <strong>Error al prestar </strong>
                    </div>
                    </div>";
            }
        }


        $libro = new LibroControlador();
        $libro->index();
    }

    public function devolver($isbn, $ejemplar)
    {

        if (isset($_SESSION['username'])) { //validar session
            $prestamo = new PrestamoModelo();
            $prestamo->eliminar($isbn, $ejemplar);

            $ins = $prestamo->eliminar($isbn, $ejemplar);

            if ($ins) {
                echo "<script> alert('Libro Devuelto correctamente'); </script>";
            } else {
                echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al Devolver libro</strong>
                </div>
                </div>";
            }

            $this->index();
        } else {

            header('location: index.php');
        }
    }
}
