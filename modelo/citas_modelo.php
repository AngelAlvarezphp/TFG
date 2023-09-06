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
        $this->datos = [];
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    
    public function modificar_citas($id, $mascota_id, $fecha, $descripcion){
        $consulta = $this->db->query("select id from mascotas where id = '$mascota_id';");
        $consultaReg = $consulta->fetch_assoc();
        
        if (!isSet($consultaReg['id'])) {
            return [false, 'La mascota no existe'];
        }
        $fechaArray = explode('-', $fecha);
        if (checkdate(intval($fechaArray[1]), intval($fechaArray[2]), intval($fechaArray[0])) === false) {
            return [false, 'Fecha incorrecta'];
        }
        
        $consulta =$this->db->query("UPDATE citas SET mascota_id = '$mascota_id', fecha = '$fecha', descripcion = '$descripcion' WHERE cita_id = '$id'");
        return [true, ''];
    }

    public function borrar_citas($id){
        $consulta =$this->db->query("DELETE FROM citas WHERE cita_id = '$id';");
    }

    public function crear_citas($mascota_id, $fecha, $descripcion){
        $consulta = $this->db->query("select id from mascotas where id = '$mascota_id';");
        $consultaReg = $consulta->fetch_assoc();
        
        if (!isSet($consultaReg['id'])) {
            return [false, 'La mascota no existe'];;
        }
        $fechaArray = explode('-', $fecha);
        if (checkdate($fechaArray[1], $fechaArray[0], $fechaArray[2])){
            return [false, 'Fecha incorrecta'];
        }
        
        $consulta = $this->db->query("INSERT INTO citas (mascota_id, fecha, descripcion) VALUES ('$mascota_id', '$fecha', '$descripcion');");
        return [true, ''];
    }

}
?>