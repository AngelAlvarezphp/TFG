<?php

if ($array_mascota!=0) {
    require_once("vista/menu_vista.php");

    ?>
    <div id='inserta'>
        <h3>Crear mascota </h3>
        <form class="row g-3 needs-validation" novalidate id="mascotasForm" action='index.php?controlador=mascotas&action=modificar_mascotas' method='POST'>
            <div class="col-md-4">
                <label for="id" class="form-label"><b>Id</label>
                <input type="text" class="form-control idOcho" id="mascota_id" name='id' value="" >
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El id debe tener 8 numeros
<<<<<<< HEAD
            </div>
=======
                </div>
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control empiezaMayuscula" id="nombre" name='nombre' value="" required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    El nombre debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
<<<<<<< HEAD
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select" name="especie" aria-label="especie">
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
                <input type="text" class="form-control edad" id="edad" name='edad' required>
                <div class="invalid-feedback">
                    La edad puede ser de 1 o 2 cifras
                </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4">
                <button class="btn btn-primary" type="submit">CREAR MACOTA</button>
            </div>
=======
                <label for="especie" class="form-label">Especie</label>
                <select class="form-select" name="especie" aria-label="especie">
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
                        <input type="text" class="form-control edad" id="edad" name='edad' required>
                        <div class="invalid-feedback">
                        La edad puede ser de 1 o 2 cifras
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-0"></div>
                <div class="col-12 mb-4 mt-4">
                    <button class="btn btn-primary" type="submit">CREAR MASCOTA</button>
                </div>
            </div>
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
        </form>
        <br>
    </div>
    <?php
    
<<<<<<< HEAD
    echo "mascota_id";
=======
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de

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

    if(isset($array_mascota)){
        echo "<table style = 'background-color: #ffffff80' border><tr><th class ='cabeza'>Id</th><th class ='cabeza'>Nombre</th><th class ='cabeza'>Especie</th><th class ='cabeza'>Edad</th><th class ='cabeza'>Borrar</th><th class ='cabeza'>Modificar</th></tr>";
        foreach ($array_mascota as $mascota) {
            echo "<tr class=''>";
            echo "<td id = 'id" . $mascota["id"] . "'class=''>" . $mascota["id"] . "</td>";
            echo "<td id = 'nombre" . $mascota["id"] . "'class=''>" . $mascota["nombre"] . "</td>";
            echo "<td id = 'especie". $mascota["id"] ."' class=''>" . $mascota["especie"] . "</td>";
            echo "<td id = 'edad". $mascota["id"] ."' class=''>" . $mascota["edad"] . "</td>";
            echo "<td class=''>
                    <form action='index.php?controlador=mascotas&action=modificar_mascotas' method='POST'>
                    <input type='text' name='mascotaBorrar' hidden value='" . $mascota["id"] . "'>
                    <input class='' type='submit' value='BORRAR'>
                    </form>
                </td>
                <td class=''>    
                    <input type='text' name='mascotaModificar' hidden value='" . $mascota["id"] . "'>
                    <input class='' type='button' onclick=modificar_mascotas('". $mascota["id"] ."') value='MODIFICAR'>
                </td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "<br>";
    }

}else{

}

?>