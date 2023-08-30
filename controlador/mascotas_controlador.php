<?php

function getPost($varmascota) {
    if(isset($_POST[$varmascota])){
        return $_POST[$varmascota];
    }
    return '';
}
//Compruebo que se haya mandado la peticion post del ajax
if(getPost("datos") =="datos"){
    $id = getPost('id');
    $nombre = getPost("nombre");
    $especie = getPost("especie");
    $edad = getPost("edad");
    $dueno_id = getPost("dueno_id");

    echo"
    <h3>Actualizar mascota</h3>
        <form class='miForm' action='index.php?controlador=mascotas&action=modificar_mascotas' method='POST'>
            <tr>
                <input type='hidden' name='dueno_id' value='$dueno_id'/>
                
                <th><labelfor='id' class='Mascota'>Id</label></th>
                <th><input type='text' name='IdModificar' class='miInput' value='$id' required/></th><br>
            </tr>
            <tr>
                <th><labelfor='nombre' class='miEtiqueta'> Nombre</label></th>
                <th><input type='text' name='NombreModificar' class='miInput' value='$nombre' required/></th><br>
            </tr>
            <tr>
                <th><label for='especie' class='miEtiqueta' >Especie</label></th>
                <th><input type='text' name='EspecieModificar' class='miInput' value='$especie' required/></th><br>
            </tr>
            <tr>
                <th><label for='edad' class='miEtiqueta' >Edad</label></th>
                <th><input type='text' name='EdadModificar' class='miInput' value='$edad' required/></th><br>
            </tr>
            <tr>
                <th colspan = 2><button type='submit'>ACTUALIZAR MASCOTA</button><th>
            </tr>
        </form>
    <br>
    ";

}else{

    require_once("modelo/mascotas_modelo.php");
    function modificar_mascotas(){
    
        $mascota = new Mascotas_modelo();
    
        if (isset($_POST['IdModificar']) && isset($_POST['NombreModificar']) && isset($_POST['EspecieModificar']) && isset($_POST['EdadModificar'])){
            
            $dueno_id = getPost("dueno_id");
            $id = getPost("IdModificar");
            $nombre = getPost("NombreModificar");
            $especie = getPost("EspecieModificar");
            $edad = getPost("EdadModificar");

            $mascota->modificar_mascotas($dueno_id, $id, $nombre, $especie, $edad);
        }
    
        if (isset($_POST["idBorrar"])) {
            $id = getPost("idBorrar");

            $mascota->borrar_mascotas($id);
        }
    
        if (isset($_POST["id"]) && isset($_POST['nombre']) && isset($_POST["especie"]) && isset($_POST["edad"])) {
            $id = getPost("id");
            $nombre = getPost("nombre");
            $especie = getPost("especie");
            $edad = getPost("edad");
            
            $mascota->crear_mascotas($id, $nombre, $especie, $edad);
        }
        $array_mascota = $mascota -> get_mascotas();
        require_once("vista/mascotas_vista.php");
    }

}

?>