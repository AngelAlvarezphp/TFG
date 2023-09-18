<?php


if ($array_cita!=0) {
    require_once("vista/menu_vista.php");
    ?>
    <div id='inserta'>
        <h3>Crear cita </h3>
        <form class="row g-3 needs-validation" novalidate id="citasForm" action='index.php?controlador=citas&action=modificar_citas' method='POST'>
            <div class="col-md-4">
                <label for="mascota_id" class="form-label"><b>Mascota id</label>
                <input type="text" class="form-control idOcho" id="mascota_id" name='mascota_id' value="" >
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El id debe tener 8 numeros
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control fecha" id="fecha" name='fecha' value="" required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La fecha debe tener el formato dd-mm-yyyy
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control empiezaMayuscula" id="descripcion" name='descripcion' value="" required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La descripcion debe empezar por mayuscula
                </div>
            </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
<<<<<<< HEAD
            <div class="col-12 mb-4">
=======
            <div class="col-12 mb-4 mt-4">
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
                <button class="btn btn-primary" type="submit">CREAR CITAS</button>
            </div>
        </form>
        <br>
    </div>
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