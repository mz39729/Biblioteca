<?php
class Conexion
{
    //private $__link;

    public static function conectar()
    {
        $link = new mysqli('192.168.1.13', 'debian', 'debian', 'biblioteca');
        if ($link->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
        }
        return $link;
        //        echo"conexion establecida<br>";
    }

    public function desconectar()
    {
        mysqli_close($this->link);
        //        echo "conexion cerrada<br>";
    }
}
