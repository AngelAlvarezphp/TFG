<?php

function getPost($varcita) {
    if(isset($_POST[$varcita])){
        return $_POST[$varcita];
    }
    return '';
}
//Compruebo que se haya mandado la peticion post del ajax
if(getPost("datos") =="datos"){
    $id = getPost('id');
    $mascota_id = getPost("mascota_id");
    $fecha = getPost("fecha");
    $descripcion = getPost("descripcion");

    echo"
    <h3>Actualizar cita</h3>
        <form class='miForm' action='index.php?controlador=citas&action=modificar_citas' method='POST'>
            <tr>
                <input type='hidden' name='id' value='$id'/>

                <th><labelfor='mascota_id' class='Cita'>Id</label></th>
                <th><input type='text' name='IdModificar' class='miInput' value='$mascota_id' required/></th><br>
            </tr>
            <tr>
                <th><labelfor='fecha' class='miEtiqueta'> Fecha</label></th>
                <th><input type='text' name='FeachaModificar' class='miInput' value='$fecha' required/></th><br>
            </tr>
            <tr>
                <th><label for='descripcion' class='miEtiqueta' >Descripcion</label></th>
                <th><input type='text' name='DescripcionModificar' class='miInput' value='$descripcion' required/></th><br>
            </tr>
            <tr>
                <th colspan = 2><button type='submit'>ACTUALIZAR DESCRIPCION</button><th>
            </tr>
        </form>
    <br>
    ";


?>