<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>

<div class="login-page">
    <h1 class=''>Iniciar Sesión</h1>
        <form class="row g-3 needs-validation" novalidate id="usuariosForm"  method='POST'>
            <div class="col-md-4">
                <label for="usuario" class="form-label"> <b>Usuario</label>
                <input type="text" class="form-control empiezaMayuscula" id="nombre" name='usuario' placeholder="introducir usuario" required/>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El nombre debe empezar por may&uacute;sculas
                </div>
            </div>

            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control password" id="password" name='pass' placeholder="Password" required/>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La contrase&ntilde;a debe tener letras mayusculas, minusculas y numeros
                </div>
            </div>
        <button type="submit" class="">Iniciar sesion</button>
        <br><br/>
    </form>

    <?php
    if () {
        # code...
    }
    ?>
    <button type="submit" class="">Registrar</button>
    <form action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
    <?php
    require_once("crear_usuario_formulario.php");
    ?>

</div>


<?php
require_once("controlador/usuarios_controlador.php");
?>

