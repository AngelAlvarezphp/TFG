<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/ajax.js"></script>
    <script src="js/validaciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CCok1QBjuzlRdub7E8-1qhHhwYRPzIU&callback=initMap"></script>
</head>
<body>
    <?php
    session_start();
    require_once("controlador/front_controlador.php");
    ?>
</body>
</html>