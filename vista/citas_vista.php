<?php


if ($array_cita!=0) {
    require_once("vista/menu_vista.php");


    echo"

    <div id='inserta'>
    <h3>Crear cita </h3>
    <table class = 'tablaForm'>
        <form class='miForm' action='' method='POST'>

            <tr>
                <th><labelfor='mascota_id' class='miEtiqueta'>Mascota_id</label></th>
                <th><input type='text' name='mascota_id' id=mascota_id' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='fecha' class='miEtiqueta' >Fecha</label></th>
                <th><input type='text' name='fecha' id='fecha' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='descripcion' class='miEtiqueta' >Descripcion</label></th>
                <th><input type='text' name='descripcion' id='descripcion' class='miInput' required/></th>
            </tr>
            <tr>
                <th colspan = 2><button onclick='if(!validarCitas()){event.preventDefault()}' type='submit'>CREAR CITAS</button><th>
            </tr>
        </form>
    </table>
    <br>
    </div>
    ";

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
    
    if(isset($array_cita)){
        echo "<table style = 'background-color: #ffffff80' border><tr><th class ='cabeza'>Mascota_id</th><th class ='cabeza'>Fecha</th><th class ='cabeza'>Descripcion</th><th class ='cabeza'>Borrar</th><th class ='cabeza'>Modificar</th></tr>";
        foreach ($array_cita as $cita) {
            echo "<tr class=''>";
            echo "<td id = 'mascota_id" . $cita["cita_id"] . "'class=''>" . $cita["mascota_id"] . "</td>";
            echo "<td id = 'fecha" . $cita["cita_id"] . "'class=''>" . $cita["fecha"] . "</td>";
            echo "<td id = 'descripcion". $cita["cita_id"] ."' class=''>" . $cita["descripcion"] . "</td>";
            echo "<td class=''>
                    <form action='index.php?controlador=citas&action=modificar_citas' method='POST'>
                    <input type='text' name='citasBorrar' hidden value='" . $cita["cita_id"] . "'>
                    <input class='' type='submit' value='BORRAR'>
                    </form>
                </td>
                <td class=''>    
                    <input type='text' name='citaModificar' hidden value='" . $cita["cita_id"] . "'>
                    <input class='' type='button' onclick=modificar_citas('". $cita["cita_id"] ."') value='MODIFICAR'>
                </td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "<br>";
    }

}else{

}

?>