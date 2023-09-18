<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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

?>
    <h3>Actualizar cita</h3>
    <form class='row g-3 needs-validation' novalidate id="citasForm" action='index.php?controlador=citas&action=modificar_citas' method='POST'>
        <tr>
                <input type='hidden' name='id' value ='<?= $id ?>'/>
                <div class="col-md-4">
                <label for="mascota_id" class="form-label"><b>Id</label>
                <input type="text" class="form-control idOcho" id="Mascota_idModificar" name='Mascota_idModificar' value ='<?= $mascota_id ?>' required/><br>
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
                <input type="text" class="form-control fecha" id="FechaModificar" name='FechaModificar' value ='<?= $fecha ?>' required><br>
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
                <input type="text" class="form-control empiezaMayuscula" id="DescripcionModificar" name='DescripcionModificar' value ='<?= $descripcion ?>' required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La descripcion debe empezar por mayuscula
                </div>
            </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4 mt-4">
                <button class="btn btn-primary" type="submit">ACTUALIZAR CITAS</button>
            </div>
        </tr>
    </form>
<?php

}else{

        require_once("modelo/citas_modelo.php");
        function modificar_citas(){
        
            $cita = new Citas_modelo();
        
            if (isset($_POST['id']) && isset($_POST['Mascota_idModificar']) && isset($_POST['FechaModificar']) && isset($_POST['DescripcionModificar'])){
                
                
                $id = getPost("id");
                $mascota_id = getPost("Mascota_idModificar");
                $fecha = getPost("FechaModificar");
                $descripcion = getPost("DescripcionModificar");
                $result = $cita->modificar_citas($id, $mascota_id, $fecha, $descripcion);
                if ($result[0]) {
                    $mensajeConfirmacion = 'Ok, cita modificada correctamente';
                } else {
                    $mensajeConfirmacion = 'Error al modificar la cita: ' . $result[1];
                }
            }
        
            if (isset($_POST["citasBorrar"])) {
                $id = getPost("citasBorrar");
    
                $cita->borrar_citas($id);
            }
    
        
            if (isset($_POST['mascota_id']) && isset($_POST["fecha"]) && isset($_POST["descripcion"])) {
    
                $mascota_id = getPost("mascota_id");
                $fecha = getPost("fecha");
                $descripcion = getPost("descripcion");
                $result = $cita->crear_citas($mascota_id, $fecha, $descripcion);
                if ($result[0]) {
                    $mensajeConfirmacion = 'Ok, cita creada correctamente';
                } else {
                    $mensajeConfirmacion = 'Error al crear la cita: '. $result[1];
                }
            }
            $array_cita = $cita -> get_citas();
    
            require_once("vista/citas_vista.php");
        }
}
?>