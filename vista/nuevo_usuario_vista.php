
<?php

if(isset($_SESSION['usuario'])){//si se ha iniciado sesion pinta el menu y la tabla
    require_once("vista/menu_vista.php");

    echo"

    <div id='inserta'>
    <h3>Crear usuario</h3>
    
    <br>
    </div>
    ";
    ?>
        <form class="row g-3 needs-validation" novalidate id="usuariosForm" action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
            <div class="col-md-4">
                <label for="nombre" class="form-label"> <b>Usuario</label>
                <input type="text" class="form-control empiezaMayuscula" id="nombre" name='usuario' value="" >
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El nombre debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control empiezaMayuscula" id="apellido" name='apellido' value="" required>
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
                <input type="password" class="form-control password" id="password" name='password' value="" required>
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
                <input type="text" class="form-control email" id="correo" name='correo' aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    El formato del email debe ser texto@dominio.ext
                </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4">
                <button class="btn btn-primary" type="submit">CREAR USUARIO</button>
            </div>
        </form>
    <?php

    echo "<div id='modif'></div>";
    echo "<div id='jsAlert' class='d-none alert alert-danger'></div>";
    if(isset($mensajeConfirmacion)) {
        if (strpos($mensajeConfirmacion, 'Error') === false) {
            echo '<div class="alert alert-success" role="alert">';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
        }
        echo $mensajeConfirmacion;
        echo "</div>";
    } 

    if(isset($array_usuario)){
        echo "<table><tr><th class ='cabeza'>Nombre</th><th class ='cabeza'>Apellido</th><th class ='cabeza'>Password</th><th class ='cabeza'>Correo</th><th class ='cabeza'>Borrar</th><th class ='cabeza'>Modificar</th></tr>";
        foreach ($array_usuario as $usuario) {
            echo "<tr class=''>";
            echo "<td id = 'usuario" . $usuario["id"] . "'class=''>" . $usuario["usuario"] . "</td>";
            echo "<td id = 'apellido" . $usuario["id"] . "'class=''>" . $usuario["apellido"] . "</td>";
            echo "<td id = 'password". $usuario["id"] ."' class=''>" . $usuario["password"] . "</td>";
            echo "<td id = 'correo". $usuario["id"] ."' class=''>" . $usuario["correo"] . "</td>";
            echo "<td class=''>
                    <form action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
                    <input type='text' name='usuarioBorrar' hidden value='" . $usuario["id"] . "'>
                    <input class='' type='submit' value='BORRAR'>
                    </form>
                </td>
                <td class=''>    
                    <input type='text' name='usuarioModificar' hidden value='" . $usuario["id"] . "'>
                    <input class='' type='button' onclick=modificar('". $usuario["id"] ."') value='MODIFICAR'>
                </td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "<br>";
    }

}else{
    require_once("vista/login_vista.php");
}

?>