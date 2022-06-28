<?php
require_once("Configuracion/config.php");
require_once("Configuracion/database.php");
require_once("core/routes.php");
require_once("Controlador/UsuarioControlador.php");
require_once("Controlador/InicioControlador.php");
require_once("Controlador/LibroControlador.php");
require_once("Controlador/PrestamoControlador.php");

if (isset($_GET['c'])) {

    $controlador = cargarControlador($_GET['c']);

    if (isset($_GET['a'])) {
        if (isset($_GET['id']) and !isset($_GET['id2'])) {

            cargarAccion($controlador, $_GET['a'], $_GET['id']);

        } else if (isset($_GET['id']) and isset($_GET['id2'])) {

            cargarAccion($controlador, $_GET['a'], $_GET['id'], $_GET['id2']);

        } else {

            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
} else {

    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
