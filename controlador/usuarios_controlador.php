<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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

?>
    <h3>Actualizar usuario</h3>
    <form class='miForm' action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
        <tr>
            <input type='hidden' name='id' value='<?= $id ?>'/>
            <div class="col-md-4">
                <label for="usuario" class="form-label"> Usuario</label>
                <th><input type="text" class="form-control empiezaMayuscula" id="usuarioModificar" name='usuarioModificar' value ='<?= $usuarioNombre ?>' required/></th><br>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El nombre debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="usuario" class="form-label">Apellido</label>
                <th><input type="text" class="form-control empiezaMayuscula" id="apellidoModificar" name='apellidoModificar' value = '<?= $apellido ?>' required/></th><br>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    El apellido debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label>
                <th><input type="password" class="form-control password" id="passwordModificar" name='passwordModificar' value = '<?= $password ?>' required/></th><br>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La contrase&ntilde;a debe tener letras mayusculas, minusculas y numeros
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="correo" class="form-label">Email</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <th><input type="text" class="form-control email" id="correoModificar" name='correoModificar' aria-describedby="inputGroupPrepend" value = '<?= $correo ?>' required/></th><br>
                <div class="invalid-feedback">
                    El formato del email debe ser texto@dominio.ext
                </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4 mt-4">
            <th colspan = 2><button onclick='if(!validarUsuarioModificar()){event.preventDefault()}' type='submit'>ACTUALIZAR USUARIO</button><th>
            </div>
        </tr>
        <br>
    </form>
<?php
    



}else{
    require_once("modelo/usuarios_modelo.php");

    function home(){
        $error="";
        $usuario = new Usuarios_modelo();
        
        if(isset($_POST['usuario']) && isset($_POST['pass'])){

            // Seleccionar el nombre del formulario
            $nombre=isset($_POST['usuario'])? $_POST['usuario']:'';
            // Seleccionar la contraseña  del formulario
            $pass=isset($_POST['pass'])? $_POST['pass']:'';
            // Comprobar que ese usuario y esa contraseña está en la tabla de usuario
            $resultLogin = $usuario->login($nombre,$pass);

            if($resultLogin != null){
                // Si esta relleno $_SESSION de ['usuario]
                $_SESSION['usuario'] = $resultLogin->usuario;
                $_SESSION['login'] = $resultLogin;
                
            } 
        
        }
        
        $array_usuario = $usuario -> get_usuarios();
        require_once("vista/nuevo_usuario_vista.php");

    }

    function logout(){
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