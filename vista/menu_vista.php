<div>

      <?php
      if(isset($_SESSION['usuario'])){
      ?>
<<<<<<< HEAD
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php?controlador=usuarios&action=logout">Desconectar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php?controlador=usuarios&action=modificar_usuarios">Usuarios</a>
                        <a class="nav-item nav-link" href="index.php?controlador=mascotas&action=modificar_mascotas">Mascotas</a>
                        <a class="nav-item nav-link" href='index.php?controlador=citas&action=modificar_citas'>Citas</a>
                  </div>
            </div>
      </nav>
=======
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                              <a class="nav-item nav-link" href="index.php?controlador=usuarios&action=modificar_usuarios">Usuarios</a>
                              <a class="nav-item nav-link" href="index.php?controlador=mascotas&action=modificar_mascotas">Mascotas</a>
                              <a class="nav-item nav-link" href='index.php?controlador=citas&action=modificar_citas'>Citas</a>
                        </div>
                  </div>
                  <a class="navbar-brand" href="index.php?controlador=usuarios&action=logout">Desconectar</a>
            </nav>
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
      <?php
      }else {
            if ($controller !== 'mapa') {
                  ?>
                  <a class="navbar-brand" href="index.php?controlador=mapa">Encuentranos</a>
                  <?php
<<<<<<< HEAD
=======
                  if(isset($_GET["registrar"])) {
                  ?>
                  <a class="navbar-brand" href="index.php">Login</a>
                  <?php
                  } else {
                  ?>
                  <a class="navbar-brand" href="index.php?registrar">Registrate</a>
                  <?php
                  }
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
                  require_once("vista/login_vista.php");
            }else{
                  ?>
                  <a class="navbar-brand" href="index.php">Login</a>
<<<<<<< HEAD
=======
                  <a class="navbar-brand" href="index.php?registrar">Registrate</a>
>>>>>>> 7eab426e8bbef0adb79dd40cea2ce412fa1678de
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <?php
            }

      }
      ?>

</div>


<body>
      <div>
            
      </div>
</body>

