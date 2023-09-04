<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="crearusuario.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php

if(isset($_SESSION['usuario'])){//si se ha iniciado sesion pinta el menu y la tabla
    require_once("vista/menu_vista.php");

    echo"

    <div id='inserta'>
    <h3>Crear usuario</h3>
    <table class = 'tablaForm'>
        <form class='miForm' action='' method='POST'>

            <tr>
                <th><labelfor='usuario' class='miEtiqueta'>Usuario</label></th>
                <th><input type='text' id='nombre' name='usuario' class='miInput' required/></th>
            </tr>
            <tr>
                <th><labelfor='apellido' class='miEtiqueta'>Apellido</label></th>
                <th><input type='text' name='apellido' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='password' class='miEtiqueta' >Password</label></th>
                <th><input type='password' name='password' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='correo' class='miEtiqueta' >Correo</label></th>
                <th><input type='text' name='correo' class='miInput' required/></th>
            </tr>
            <tr>
                <th colspan = 2><button type='submit' id='crear_usuarios'>CREAR USUARIO</button><th>
            </tr>
        </form>
    </table>
    <br>
    </div>
    ";

    echo "<div id='modif'>

    </div>
    ";

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