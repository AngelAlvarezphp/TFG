<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>

<div class="login-page">

    <h1 class=''>Iniciar Sesión</h1>

<form class='' action='' method='POST'>
    <div class="login-form">
        <label for="usuario">Usuario</label>
        <input type="text" class="miInput" name="usuario" placeholder="introducir usuario" required/>
    </div>
    <div class="login-form">
        <label for='password'>Password</label>
        <input type="password" class="miInput" name="pass" placeholder="Password" required/>
    </div>
    <button type="submit" class="">Iniciar sesion</button>
</form>


<div>

    <button type='submit' class=''> registrarse </button>

</div>
<?php
require_once("controlador/usuarios_controlador.php");
?>

