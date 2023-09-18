<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>


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
?>

