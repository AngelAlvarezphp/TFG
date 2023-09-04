<?php

session_start();

function getPost($varname) {
    if(isset($_POST[$varname])){
        return $_POST[$varname];
    }
    return '';
}
//Compruebo que se haya mandado la peticion post del ajax
if(getPost("datos") =="datos"){
    $id = getPost('id');
    $usuarioNombre = getPost("usuario");
    $apellido = getPost("apellido");
    $password = getPost("password");
    $correo = getPost("correo");
    $tipo_usuario = getPost("tipo_usuario");

    echo"
    <h3>Actualizar usuario</h3>
        <form class='miForm' action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
            <tr>
                <input type='hidden' name='id' value='$id'/>
                <th><labelfor='usuario' class='miEtiqueta'>Usuario</label></th>
                <th><input type='text' name='usuarioModificar' class='miInput' value='$usuarioNombre' required/></th><br>
            </tr>
            <tr>
                <th><labelfor='usuario' class='miEtiqueta'>apellido</label></th>
                <th><input type='text' name='apellidoModificar' class='miInput' value='$apellido' required/></th><br>
            </tr>
            <tr>
                <th><label for='password' class='miEtiqueta' >Password</label></th>
                <th><input type='text' name='passwordModificar' class='miInput' value='$password' required/></th><br>
            </tr>
            <tr>
                <th><label for='correo' class='miEtiqueta' >Correo</label></th>
                <th><input type='text' name='correoModificar' class='miInput' value='$correo' required/></th><br>
            </tr>
            <!-- tr>
                <th><labelfor='usuario' class='miEtiqueta'>tipo_usuario</label></th>
                <th><input type='text' name='asdaDS' class='miInput' value='$tipo_usuario' required/></th><br>
            </tr-->
            <tr>
                <th colspan = 2><button type='submit'>ACTUALIZAR USUARIO</button><th>
            </tr>
        </form>
    <br>
    ";

}else{
    require_once("modelo/usuarios_modelo.php");
    function home(){
        $error="";
        $usuario = new Usuarios_modelo();
        
        if(isset($_POST['usuario'])){

            // Seleccionar el nombre del formulario
            $nombre=isset($_POST['usuario'])? $_POST['usuario']:'';
            // Seleccionar la contraseña  del formulario
            $pass=isset($_POST['pass'])? $_POST['pass']:'';
            // Comprobar que ese usuario y esa contraseña está en la tabla de usuario
            $resultLogin = $usuario->login($nombre,$pass);
            
            echo "<br/> resultLogin <br/> " . $resultLogin->id;
            echo "<br/> resultLogin <br/> " . $resultLogin->usuario;
            
            if($resultLogin != null){
                // Si esta relleno $_SESSION de ['usuario]
                $_SESSION['usuario'] = $resultLogin->usuario;
                $_SESSION['login'] = $resultLogin;
                
            }else{
                require_once("vista/nuevo_usuario_vista.php");
            } 
        
        }

        $array_usuario = $usuario -> get_usuarios();
        require_once("vista/nuevo_usuario_vista.php");

    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: index.php");
    }


    function modificar_usuarios(){
        if (!isset($_SESSION["usuario"])) {
            header("Location: index.php");
        }
    
        $usuario = new Usuarios_modelo();
    
        if (isset($_POST['usuarioModificar']) && isset($_POST['apellidoModificar']) && isset($_POST['passwordModificar']) && isset($_POST['correoModificar'])){
            
            $id = getPost("id");
            $usuarioNombre = getPost("usuarioModificar");
            $apellido = getPost("apellidoModificar");
            $password = getPost("passwordModificar");
            $correo = getPost("correoModificar");

            $usuario->actualizar_usuario($id, $usuarioNombre, $apellido, $password, $correo);
        }
    
        if (isset($_POST["usuarioBorrar"])) {
            $id = getPost("usuarioBorrar");

            $usuario->eliminar_usuario($id);
        }
    
        if (isset($_POST["usuario"]) && isset($_POST['apellido']) && isset($_POST["password"]) && isset($_POST["correo"])) {
            $usuarioNombre = getPost("usuario");
            $apellido = getPost("apellido");
            $password = getPost("password");
            $correo = getPost("correo");
            
            $usuario->nuevo_usuario($usuarioNombre, $apellido, $password, $correo);
        }
        $array_usuario = $usuario -> get_usuarios();
        require_once("vista/nuevo_usuario_vista.php");
    }

}

?>