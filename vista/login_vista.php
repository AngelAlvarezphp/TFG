<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>

<div class="login-page">

    <h1 class=''>Iniciar Sesión</h1>

    <form class='' action='' method='POST'>
        
        <div class="login-form">    
            <div>
                <label for='usuario' class='miEtiqueta' >Usuario</label>
                <input class='miInput' type='text' name='usuario' class='' placeholder='Usuario' required/>
            </div>
            <div>
                <label for='password' class='miEtiqueta' >Password</label>
                <input class='miInput' type='password' name='pass' placeholder='Password' class='' required=''/>
            </div>        
            <div>
                <button type='submit' class=''> iniciar sesion </button>
            </div>
    </form>
</div>

<div>

    <button type='submit' class=''> registrarse </button>

</div>
<?php
require_once("controlador/usuarios_controlador.php");
?>

