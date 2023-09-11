<div>


      <?php

      if(isset($_SESSION['usuario'])){
            echo"<nav class='miBarra1' style= 'position:static;'>
                  <a href='index.php?controlador=usuarios&action=modificar_usuarios' class='miButton'>Usuarios</a>
                  <a href='index.php?controlador=mascotas&action=modificar_mascotas' class='miButton'>Mascotas</a>
                  <a href='index.php?controlador=citas&action=modificar_citas' class='miButton'>Citas</a>
                  <a href='index.php?controlador=usuarios&action=logout' class='miButton'>Desconectar</a>
            
            </nav>";
      } else {
            
            if ($controller !== 'mapa') {
                  echo"<nav class='miBarra1' style= 'position:static;'>
                        <a href='index.php?controlador=mapa' class='miButton'>Encuentranos</a>
                  </nav>";
                  require_once("vista/login_vista.php");
            } else {
                  echo"<nav class='miBarra1' style= 'position:static;'>
                        <a href='index.php' class='miButton'>Login</a>
                  </nav>";
            }
      }
      ?>

</div>
