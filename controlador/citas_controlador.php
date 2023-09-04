<?php

session_start();

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
                <th><input type='text' name='Mascota_idModificar' class='miInput' value='$mascota_id' required/></th><br>
            </tr>
            <tr>
                <th><labelfor='fecha' class='miEtiqueta'> Fecha</label></th>
                <th><input type='text' name='FechaModificar' class='miInput' value='$fecha' required/></th><br>
            </tr>
            <tr>
                <th><label for='descripcion' class='miEtiqueta' >Descripcion</label></th>
                <th><input type='text' name='DescripcionModificar' class='miInput' value='$descripcion' required/></th><br>
            </tr>
            <tr>
                <th colspan = 2><button type='submit'>ACTUALIZAR CITAS</button><th>
            </tr>
        </form>
    <br>
    ";

}else{

        require_once("modelo/citas_modelo.php");
        function modificar_citas(){
        
            $cita = new Citas_modelo();
        
            if (isset($_POST['id']) && isset($_POST['Mascota_idModificar']) && isset($_POST['FechaModificar']) && isset($_POST['DescripcionModificar'])){
                
                
                $id = getPost("id");
                $mascota_id = getPost("Mascota_idModificar");
                $fecha = getPost("FechaModificar");
                $descripcion = getPost("DescripcionModificar");
    
                $cita->modificar_citas($id, $mascota_id, $fecha, $descripcion);
            }
        
            if (isset($_POST["citasBorrar"])) {
                $id = getPost("citasBorrar");
    
                $cita->borrar_citas($id);
            }
    
            echo "valores del post:";
            print_r($_POST);
        
            if (isset($_POST['mascota_id']) && isset($_POST["fecha"]) && isset($_POST["descripcion"])) {
    
                $mascota_id = getPost("mascota_id");
                $fecha = getPost("fecha");
                $descripcion = getPost("descripcion");

                $cita->crear_citas($mascota_id, $fecha, $descripcion);
            }
            $array_cita = $cita -> get_citas();
    
            require_once("vista/citas_vista.php");
        }
}
?>