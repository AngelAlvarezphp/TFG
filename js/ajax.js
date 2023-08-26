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
