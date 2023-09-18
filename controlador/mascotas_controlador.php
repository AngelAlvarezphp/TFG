<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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
    
?>
    
    <h3>Actualizar macota</h3>
    <form class='miForm' action='index.php?controlador=mascotas&action=modificar_mascotas' method='POST'>
        <tr>
            <input type='hidden' name='dueno_id' value ='<?= $dueno_id ?>'/>
            <div class="col-md-4">
                <label for="usuario" class="form-label"> <b>Usuario</label>
                <th><input type="text" class="form-control idOcho" id="mascota_idModificar" name='mascota_idModificar' value ='<?= $id ?>' required/></th><br>
                <div class="valid-feedback">
                    Verificacion correcta
            </div>
                <div class="invalid-feedback nombreHelp">
                    El id debe tener 8 numeros
            </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <th><input type="text" class="form-control empiezaMayuscula" id="nombreModificar" name='NombreModificar'value ='<?= $nombre ?>' required/></th><br>
                <div class="valid-feedback">
                    Verificacion correcta
            </div>
                <div class="invalid-feedback">
                    El Nombre debe empezar por may&uacute;sculas
            </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select" name="EspecieModificar" aria-label="especie"value ='<?= $especie ?>' required><br>
            <option selected disabled value="">elegir</option>
                <option value='gato'>gato</option>
                <option value='perro'>perro</option>
                <option value='conejo'>conejo</option>
                <option value='hamster'>hamster</option>
                <option value='loro'>loro</option>
                <option value='perdiz'>perdiz</option>
                <option value='paloma'>paloma</option>
                <option value='tortuga'>tortuga</option>
                <option value='iguana'>iguana</option>
                <option value='camaleon'>camaleon</option>
                </select>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="edad" class="form-label">Edad</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control edad" id="edadModificar" name='EdadModificar'value ='<?= $edad ?>' required><br>
            <div class="invalid-feedback">
                    La edad puede ser de 1 o 2 cifras
            </div>
            </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4">
            <th colspan = 2><button onclick='if(!validarMascotaModificar()){event.preventDefault()}' type='submit'>ACTUALIZAR MASCOTA</button><th>
            </div>
        </tr>
    </form>
<?php



}else{
    echo getPost("datos");
    require_once("modelo/mascotas_modelo.php");
    function modificar_mascotas(){
    
        $mascota = new Mascotas_modelo();
    
        if (isset($_POST['IdModificar']) && isset($_POST['NombreModificar']) && isset($_POST['EspecieModificar']) && isset($_POST['EdadModificar'])){
            
            
            $id = getPost("IdModificar");
            $nombre = getPost("NombreModificar");
            $especie = getPost("EspecieModificar");
            $edad = getPost("EdadModificar");
            $dueno_id = getPost("dueno_id");

            $mascota->modificar_mascotas($id, $nombre, $especie, $edad, $dueno_id);
        }
    
        if (isset($_POST["mascotaBorrar"])) {
            $id = getPost("mascotaBorrar");

            $mascota->borrar_mascotas($id);
        }

    
        if (isset($_POST["id"]) && isset($_POST['nombre']) && isset($_POST["especie"]) && isset($_POST["edad"])) {

            $id = getPost("id");
            $nombre = getPost("nombre");
            $especie = getPost("especie");
            $edad = getPost("edad");

            $dueno_id = getPost("dueno_id");
            if ($dueno_id == '') {
                $dueno_id = $_SESSION["login"]->id;
            }

            $mascota->crear_mascotas($id, $nombre, $especie, $edad, $dueno_id);
        }
        $array_mascota = $mascota -> get_mascotas();

        require_once("vista/mascotas_vista.php");
    }

}

?>