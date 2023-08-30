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
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    
    public function modificar_mascotas($id, $nombre, $especie, $edad, $dueno_id){
        $consulta =$this->db->query("UPDATE mascotas SET id = '$id', nombre = '$nombre', especie = '$especie', edad = '$edad' WHERE dueno_id = '$dueno_id'");
    }

    public function borrar_mascotas($dueno_id){
        $consulta =$this->db->query("DELETE FROM mascotas WHERE dueno_id = '$dueno_id';");
    }

    public function crear_mascotas($id, $nombre, $especie, $edad){
        //dudando si udar el mismo metodo que tengo en la funcion nuevo_usuario 
    }


}
?>