<?php
require_once("vista/menu_vista.php");
require_once("controlador/usuarios_controlador.php");
?>

<table class = "tablaForm">
    <form class='' action='' method='POST'>
        <tr>
            <th colspan = 2>
                <h1 class=''>Iniciar Sesión</h1>
            </th>
        </tr>
        <tr>
            <td >
                <label for='usuario' class='miEtiqueta' >Usuario</label>
            </td>
            <td >
            <input class='miInput' type='text' name='usuario' class='' placeholder='Usuario' required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for='password' class='miEtiqueta' >Password</label>
            </td>
            <td>
            <input class='miInput' type='password' name='pass' placeholder='Password' class='' required=''/>
            </td>
        </tr>
        <tr>
            <td>
                
            </td>
        </tr>
        <tr>
            <th >
                <button type='submit' class=''> iniciar sesion </button>
            </th>
        </tr>
    </form>
</table>

<?php
require_once("controlador/usuarios_controlador.php");
?>

