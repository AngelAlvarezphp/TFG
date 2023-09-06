


<h3>Crear usuario</h3>
    <table class = 'tablaForm'>
        <form class='miForm' action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>

            <tr>
                <th><labelfor='usuario' class='miEtiqueta'>Usuario</label></th>
                <th><input type='text' id='nombre' name='usuario' class='miInput' required/></th>
            </tr>
            <tr>
                <th><labelfor='apellido' class='miEtiqueta'>Apellido</label></th>
                <th><input type='text' id='apellido' name='apellido' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='password' class='miEtiqueta' >Password</label></th>
                <th><input type='password' id='password' name='password' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='correo' class='miEtiqueta' >Correo</label></th>
                <th><input type='text' id='correo' name='correo' class='miInput' required/></th>
            </tr>
            <tr>
                <th colspan = 2><button onclick='if(!validarUsuario()){event.preventDefault()}' type='submit' id='crear_usuarios'>CREAR USUARIO</button><th>
            </tr>
        </form>
    </table>