<?php

class UsuarioModelo
{

    private $db;
    private $usuario;

    public function __construct()
    {

        $this->db = Conexion::conectar();
        $this->usuario = array();
    }


    public function getUsuarios()
    {

        $sql = "SELECT * FROM usuario";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->usuario[] = $row;
        }
        
        return $this->usuario;
    }

    public function getUsuariosLogin($cedula, $password)
    {
        $sql = "SELECT * FROM usuario WHERE (cedula='$cedula' or nombre='$cedula') and pass='$password' ";

        $resultado = $this->db->query($sql);
        //$consulta = mysqli_fetch_array($resultado);  
        $row = $resultado->fetch_assoc();

        return $row;
       // return $consulta;
    }

    public function insertar($nombre, $cedula, $fecha, $sexo, $tipo)
    {


        $sql = "INSERT INTO usuario (cedula, nombre, fecha_nacimiento, sexo, tipo, estado)
            VALUES ('$cedula', '$nombre', '$fecha', '$sexo', '$tipo', '0')";
        $resultado = $this->db->query($sql);


        return $resultado;
    }

    public function modificar($nombre, $cedula, $fecha, $sexo, $tipo, $estado)
    {

        $sql = "UPDATE usuario SET nombre='$nombre', fecha_nacimiento='$fecha', sexo='$sexo', tipo='$tipo', 
                                                    estado='$estado' WHERE cedula='$cedula'";
        $resultado = $this->db->query($sql);
        return $resultado;
    }

    public function getUsuario($cedula)
    {
        $sql = "SELECT * FROM usuario WHERE cedula='$cedula' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function usuariosActivos()
    {

        $sql = "SELECT * FROM usuario WHERE estado='1' AND tipo='P' OR tipo='E'";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->usuario[] = $row;
        }

        return $this->usuario;
    }

    public function activarUsuario($cedula)
    {

        $sql = "UPDATE usuario SET estado='1' WHERE cedula='$cedula'";
        $resultado = $this->db->query($sql);
        return $resultado;
    }
}
