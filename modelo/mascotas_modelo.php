<?php
class mascotas_modelo{

    private $db;
    private $datos;

    public function get_mascotas(){
        $sql = "SELECT * FROM mascotas";
        $consulta =$this->db->query($sql);
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }
    
    public function modificar_mascotas($id, $nombre, $especie, $edad, $dueño_id){
        $consulta =$this->db->query("UPDATE mascotas SET id = '$id', nombre = '$nombre', especie = '$especie', edad = '$edad' WHERE dueño_id = '$dueño_id'");
    }

    public function borrar_mascotas($dueño_id){
        $consulta =$this->db->query("DELETE FROM mascotas WHERE dueño_id = '$dueño_id';");
    }

    public function crear_mascotas($id, $nombre, $especie, $edad){
        //dudando si udar el mismo metodo que tengo en la funcion nuevo_usuario 
    }


}
?>