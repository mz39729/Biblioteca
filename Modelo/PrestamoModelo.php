<?php
class PrestamoModelo
{

    private $db;
    private $prestamo;

    public function __construct()
    {

        $this->db = Conexion::conectar();
        $this->prestamo = array();
    }

    public function getPrestamos()
    {

        $sql = "SELECT DISTINCT prestamo.*,libro.nombre_libro, usuario.nombre 
                FROM prestamo,libro, usuario 
                WHERE prestamo.libro_ISBN = libro.ISBN 
                AND prestamo.libro_ejemplar = libro.ejemplar 
                AND prestamo.`usuario_cedula`=usuario.`cedula`;";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->prestamo[] = $row;
        }
        
        return $this->prestamo;
    }

    public function prestamo($isbn, $ejemplar, $cedula, $fecha)
    {
        $sql = "INSERT INTO prestamo (libro_ISBN, libro_ejemplar, usuario_cedula, fecha) 
        VALUES ('$isbn', '$ejemplar', '$cedula', '$fecha')";
        $resultado = $this->db->query($sql);
        return $resultado;
    }

    public function consultarPrestamo($cedula)
    {

        $sql = "SELECT prestamo.usuario_cedula, usuario.nombre, usuario.tipo, COUNT(*) AS cont 
        FROM prestamo, usuario 
        WHERE usuario_cedula='$cedula' and usuario.cedula='$cedula'";

        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }

    public function getPrestamo($isbn)
    {
        $sql = "SELECT * 
        FROM prestamo
        WHERE libro_ISBN = '$isbn'" ;

        $resultado = $this->db->query($sql);
        
        return $resultado;
    }
 

    public function eliminar($isbn, $ejemplar)
    {
        $sql = "DELETE FROM prestamo
        WHERE libro_ISBN = '$isbn'
        AND libro_ejemplar = '$ejemplar'" ;

        $resultado = $this->db->query($sql);
        
        return $resultado;
    }
}
