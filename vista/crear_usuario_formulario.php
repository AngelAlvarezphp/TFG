
    <div id='registrar'>
        <h3>Crear usuario</h3>
        <form class="row g-3 needs-validation" novalidate id="usuariosForm" action='index.php?controlador=usuarios&action=modificar_usuarios' method='POST'>
            <div class="col-md-4">
                <label for="nombre" class="form-label"> <b>Usuario</label>
                <input type="text" class="form-control empiezaMayuscula" id="nombre" name='usuario' value="" >
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback nombreHelp">
                    El nombre debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control empiezaMayuscula" id="apellido" name='apellido' value="" required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    El apellido debe empezar por may&uacute;sculas
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control password" id="password" name='password' value="" required>
                <div class="valid-feedback">
                    Verificacion correcta
                </div>
                <div class="invalid-feedback">
                    La contrase&ntilde;a debe tener letras mayusculas, minusculas y numeros
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-md-4">
                <label for="correo" class="form-label">Email</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control email" id="correo" name='correo' aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    El formato del email debe ser texto@dominio.ext
                </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-0"></div>
            <div class="col-12 mb-4 mt-4">
                <button class="btn btn-primary" type="submit">CREAR USUARIO</button>
            </div>
        </form>
        <br>
    </div>
    
