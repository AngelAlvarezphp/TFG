<?php
class Usuarios_modelo{

    private $db;
    private $datos;

    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this-> datos = array();
    }

    public function get_usuarios(){
        $sql = "SELECT * FROM usuarios";
        $consulta =$this->db->query($sql);
        $this->datos = [];
        while($registro = $consulta ->fetch_assoc()){
            $this->datos[] = $registro;
        }

        return $this->datos;
    }

    public function login($nombre, $password){
        $sql = "SELECT id, usuario FROM usuarios where usuario = '$nombre' and password ='$password'";
        $usuario =  null;
        if($consulta =$this->db->query($sql)){
            while($registro = $consulta ->fetch_assoc()){
                $this->datos[] = $registro;
                $usuario = new stdClass();
                $usuario->id = $registro["id"];
                $usuario->usuario = $registro["usuario"];
            }
        }
        return $usuario;
    }

    public function actualizar_usuario($id, $usuario, $apellido, $password, $correo){
        $consulta =$this->db->query("UPDATE usuarios SET usuario = '$usuario', apellido = '$apellido', password = '$password', correo = '$correo' WHERE id = '$id'");
    }

    public function eliminar_usuario($id){
        $consulta = $this->db->query("DELETE FROM usuarios WHERE id = '$id'");
    }

    public function nuevo_usuario($usuario, $apellido, $password, $correo ){
        $maxIdResult = $this->db->query("SELECT max(id)+1 as nextid from usuarios;");
        $row = $maxIdResult->fetch_assoc();
        $id = $row['nextid'];
        $consulta = $this->db->query("INSERT INTO usuarios (id, usuario, apellido, password, correo) VALUES ('$id', '$usuario', '$apellido', '$password', '$correo');");
    }

}
?>
