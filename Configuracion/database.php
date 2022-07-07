<?php
class Conexion
{
    //private $__link;

    public static function conectar()
    {
        $link = new mysqli('192.168.1.13', 'debian', 'debian', 'biblioteca');//cambiar segun configuracion mysqli('Host', 'usuario', 'contraseña', 'Nombre_base_datos')
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
