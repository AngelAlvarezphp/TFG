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
        $result = $this->validar_mascota($mascota_id);
        if ($result[0]) {
            $result = $this->validar_fecha($fecha);
        }
        if ($result[0]) {
            $consulta =$this->db->query("UPDATE citas SET mascota_id = '$mascota_id', fecha = '$fecha', descripcion = '$descripcion' WHERE cita_id = '$id'");
        }
        return $result;
    }

    public function borrar_citas($id){
        $consulta =$this->db->query("DELETE FROM citas WHERE cita_id = '$id';");
    }

    public function crear_citas($mascota_id, $fecha, $descripcion){
        $result = $this->validar_mascota($mascota_id);
        if ($result[0]) {
            $result = $this->validar_fecha($fecha);
        }
        if ($result[0]) {
            $consulta = $this->db->query("INSERT INTO citas (mascota_id, fecha, descripcion) VALUES ('$mascota_id', '$fecha', '$descripcion');");
        }
        return $result;
    }

    public function validar_mascota($mascota_id) {
        $consulta = $this->db->query("SELECT id FROM mascotas WHERE id = '$mascota_id';");
        $consultaReg = $consulta->fetch_assoc();
        
        if (!isSet($consultaReg['id'])) {
            return [false, 'La mascota no existe'];
        }
        return [true, ''];
    }

    public function validar_fecha($fecha) {
        $fechaArray = explode('-', $fecha);
        if (checkdate($fechaArray[1], $fechaArray[0], $fechaArray[2])){
            return [false, 'Fecha incorrecta'];
        }
        return [true, ''];
    }

}
?>