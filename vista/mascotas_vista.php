<?php

print_r($array_mascota);

print_r($array_mascota !=0 );



if ($array_mascota!=0) {
    require_once("vista/menu_vista.php");

    //print_r($_SESSION['login']);

    echo"

    <div id='inserta'>
    <h3>Crear mascota </h3>
    <table class = 'tablaForm'>
        <form class='miForm' action='' method='POST'>

            <tr>
                <th><labelfor='id' class='miEtiqueta'>Id</label></th>
                <th><input type='text' name='id' class='miInput' required/></th>
            </tr>
            <tr>
                <th><labelfor='nombre' class='miEtiqueta'>Nombre</label></th>
                <th><input type='text' name='nombre' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='especie' class='miEtiqueta' >Especie</label></th>
                <th><input type='text' name='especie' class='miInput' required/></th>
            </tr>
            <tr>
                <th><label for='edad' class='miEtiqueta' >Edad</label></th>
                <th><input type='text' name='edad' class='miInput' required/></th>
            </tr>
            <tr>
                <th colspan = 2><button type='submit'>CREAR MASCOTAS</button><th>
            </tr>
        </form>
    </table>
    <br>
    </div>
    ";

    echo "<div id='modif'>
    </div>
    ";

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