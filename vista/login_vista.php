<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>

<<<<<<< HEAD
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
=======

<?php
    if(isset($_GET["registrar"])) {
        require_once("crear_usuario_formulario.php");
    } else {
?>

<div class="login-page">
    <h1 class=''>Iniciar Sesión</h1>
        <form class="row g-3 needs-validation" id="usuariosForm"  method='POST'>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Usuario</label>
                <input type="text" class="form-control " id="nombre" name='usuario' placeholder="introducir usuario" required/>
            </div>

            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control " id="password" name='pass' placeholder="Password" required/>
            </div>
        <button type="submit" class="">Iniciar sesion</button>
        <br><br/>
    </form>
</div>

<?php
    }
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
?>

