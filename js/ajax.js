function modificar(i){
    $("#inserta").hide();
    $("#modif").show();
    $.ajax({
        type: 'post',
        data: {
            "datos":"datos",
            "id": i,
            "usuario":$("#usuario"+i).text(),
            "apellido":$("#apellido"+i).text(),
            "password":$("#password"+i).text(),
            "correo":$("#correo"+i).text()
        },
        url: 'controlador/usuarios_controlador.php',
        success: function (response){
            $("#modif").html(response);
        },
        error: function(error){
            console.log(error);
        }
    });
}


function modificar_mascotas(i){
    $("#inserta").hide();
    $("#modif").show();
    $.ajax({
        type: 'post',
        data: {
            "datos":"datos",
            "id": i,
            "nombre":$("#nombre"+i).text(),
            "especie":$("#especie"+i).text(),
            "edad":$("#edad"+i).text()
        },
        url: 'controlador/mascotas_controlador.php',
        success: function (response){
            $("#modif").html(response);
        },
        error: function(error){
            console.log(error);
        }
    });
}



function modificar_citas(i){
    $("#inserta").hide();
    $("#modif").show();
    $.ajax({
        type: 'post',
        data: {
            "datos":"datos",
            "id": i,
            "mascota_id":$("#mascota_id"+i).text(),
            "fecha":$("#fecha"+i).text(),
            "descripcion":$("#descripcion"+i).text()
        },
        url: 'controlador/citas_controlador.php',
        success: function (response){
            $("#modif").html(response);
        },
        error: function(error){
            console.log(error);
        }
    });
}