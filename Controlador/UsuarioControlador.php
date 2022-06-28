<?php
session_start();
class UsuarioControlador
{
    public function __construct()
    {
        require_once("Modelo/UsuarioModelo.php");
    }

    public function inicio()
    {


        $cedula = $_POST['cedula'];
        $password = $_POST['password'];

        $usuario = new UsuarioModelo();

        $dataLogin["usuarioLogin"] = $usuario->getUsuariosLogin($cedula, $password);
        // var_dump($dataLogin["usuarioLogin"]);

        if (!isset($_SESSION['username'])) {
            if (($dataLogin["usuarioLogin"]['cedula'] == $cedula or $dataLogin["usuarioLogin"]['nombre'] == $cedula) && $dataLogin["usuarioLogin"]['pass'] == $password) {


                $_SESSION['username'] = $dataLogin["usuarioLogin"]['nombre'];
                $_SESSION['tipo'] = $dataLogin["usuarioLogin"]['tipo'];

                header('location: index.php');

            } else if ($dataLogin["usuarioLogin"]['cedula'] != $cedula && $dataLogin["usuarioLogin"]['pass'] != $password) {
                echo  "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Por favor confirme el usuario y/o contraseñas </strong>
                </div>
                </div>";
                require_once("Vista/login.php");
            } else {
                echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error de conexion </strong>
                </div>
                </div>";
                require_once("Vista/login.php");
            }
        } else {
            require_once("Vista/index.php");
        }
    }

    public function index()
    {
        $usuario = new UsuarioModelo();
        $data["titulo"] = "usuarios";
        $data["usuario"] = $usuario->getUsuarios();

        require_once("Vista/usuarios.php");
    }

    public function nuevo()
    {

        require_once("Vista/registrarUsuarios.php");
    }

    public function guardarUsuario()
    {

        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $fecha = $_POST['fecha'];
        $sexo = $_POST['sexo'];
        $tipo = $_POST['tipo'];

        $usuario = new UsuarioModelo();
        $ins = $usuario->insertar($nombre, $cedula, $fecha, $sexo, $tipo);

        $data["titulo"] = "Usuarios";

        if ($ins) {
            echo "<script> alert('Usuario guardado correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>¡Error al guardar, verifica los datos que se intenta registrar! </strong>
                </div>
                </div>";
        }
        $this->index();
    }



    public function modificarUsuario($cedula)
    {

        $usuario = new UsuarioModelo();

        $data["cedula"] = $cedula;
        $data["usuario"] = $usuario->getUsuario($cedula);
        require_once "Vista/usuarioModificar.php";
    }

    public function modificar()
    {

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $sexo = $_POST['sexo'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];


        $usuario = new UsuarioModelo();
        $ins = $usuario->modificar($nombre, $cedula, $fecha, $sexo, $tipo, $estado);
        if ($ins) {
            echo "<script> alert('Usuario Modificado correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al guardar </strong>
                </div>
                </div>";
        }
        $this->index();
    }

    public function activarUsuario($cedula)
    {
        $usuario = new UsuarioModelo();
        $ins = $usuario->activarUsuario($cedula);
        if ($ins) {
            echo "<script> alert('Usuario Activado correctamente'); </script>";
        } else {
            echo "<div id='success'>
                <div class='alert alert-danger'>
                <strong>Error al Activar usuario </strong>
                </div>
                </div>";
        }
        $this->index();
    }

    public function login()
    {
        require_once("Vista/login.php");
    }
}
