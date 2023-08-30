function modificar_mascotas(i){
    $("#inserta").hide();
    $("#modif").show();
    $.ajax({
        type: 'post',
        data: {
            "datos":"datos",
            "id": $("#id"+i).text(),
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