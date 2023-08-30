<?php
class Citas_modelo{

    private $db;
    private $datos;

    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this-> datos = array();
    }

    public function get_citas(){
        $sql = "SELECT * FROM citas";
        $consulta =$this->db->query($sql);
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    
    public function modificar_citas($id, $mascota_id, $fecha, $descripcion){
        $consulta =$this->db->query("UPDATE citas SET mascota_id = '$mascota_id', fecha = '$fecha', descripcion = '$descripcion' WHERE id = '$id'");
    }

    public function borrar_citas($id){
        $consulta =$this->db->query("DELETE FROM citas WHERE id = '$id';");
    }

    public function crear_citas($mascota_id, $fecha, $descripcion){
        $maxIdResult = $this->db->query("SELECT max(id)+1 from citas;");
        $id = $maxIdResult->fetch_assoc()[0];
        $consulta = $this->db->query("INSERT INTO citas (id, mascota_id, fecha, descripcion) VALUES ('$id', '$mascota_id', '$fecha', '$descripcion');");
    }

}
?>