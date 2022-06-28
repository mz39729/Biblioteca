<?php

class InicioControlador
{


    public function __construct()
    {
    }

    public function index()
    {

        require_once("Vista/index.php");
    }

    public function salir()
    {

        session_destroy();
        header('location: index.php');
        //require_once("Vista/index.php");
        exit();
    }
}
