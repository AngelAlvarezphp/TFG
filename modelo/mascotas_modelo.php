<?php
class Mascotas_modelo{

    private $db;
    private $datos;

    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this-> datos = array();
    }

    public function get_mascotas(){
        $sql = "SELECT * FROM mascotas";
        $consulta =$this->db->query($sql);
        $this->datos = [];
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    
    public function modificar_mascotas($id, $nombre, $especie, $edad, $dueno_id){
        $consulta =$this->db->query("UPDATE mascotas SET nombre = '$nombre', especie = '$especie', edad = '$edad' WHERE id='$id';");
    }

    public function borrar_mascotas($id){
        $consulta =$this->db->query("DELETE FROM mascotas WHERE id = '$id';");
    }

    public function crear_mascotas($id, $nombre, $especie, $edad, $dueno_id){
    
        $consulta =$this->db->query("INSERT into mascotas (id, nombre, especie, edad, dueno_id) values ('$id', '$nombre', '$especie', '$edad', '$dueno_id');");
    }


}
?>