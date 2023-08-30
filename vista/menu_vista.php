<?php
if(isset($_SESSION['usuario'])){
echo"<div class='grid-container'>
      <nav class='miBarra1' style= 'position:static;'>
      <a href='index.php?controlador=usuarios&action=modificar_usuarios' class='miButton'>Editar Usuarios</a>
      <a href='index.php?controlador=mascotas&action=modificar_mascotas' class='miButton'>Editar Mascotas</a>
            <a href='index.php?controlador=usuarios&action=logout' class='miButton'>Desconectar</a>
      
      </nav>";
} else {
  echo"<div class='grid-container'>
      <nav class='miBarra1' style= 'position:static;'>
            <a href='index.php?controlador=mapa' class='miButton'>Mapa</a>
            <a href='index.php?controlador=usuarios&action=home' class='miButton'>Conectar</a>
      </nav>";
}
?>

