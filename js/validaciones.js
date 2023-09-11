
function ocultarError() {
    $("#jsAlert").addClass("d-none");
    $("#jsAlert").html('');
}

function mostrarError(msg) {
    $("#jsAlert").removeClass("d-none");
    $("#jsAlert").html(msg);
}

function validarUsuario (qNombre='#nombre', qApellido='#apellido', qPassword='#password', qCorreo='#correo') {
    
    const inputNombre = document.querySelector(qNombre);
    const inputApellido = document.querySelector(qApellido);
    const inputPassword = document.querySelector(qPassword);
    const inputCorreo = document.querySelector(qCorreo);
    const usuarioValido =  inputNombre.value.match(/^[A-Z].*$/);
    const apelidoValido = inputApellido.value.match(/^[A-Z].*$/);
    const passwordValido =  inputPassword.value.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]+$/);
    const correoValido =  inputCorreo.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.\w+$/);
    let errores = [];
    if (!usuarioValido) {
        errores.push('El nombre debe empezar por mayusculas');
        inputNombre.style.color = 'red';
    } else {
        inputNombre.style.color = '';
    }
    if (!apelidoValido) {
        errores.push('El apellido debe empezar por mayusculas');
        inputApellido.style.color = 'red';
    } else {
        inputApellido.style.color = '';
    }
    if (!passwordValido) {
        errores.push('La contraseña debe tener numeros letras y mayusculas');
        inputPassword.style.color = 'red';
    } else {
        inputPassword.style.color = '';
    }
    if (!correoValido) {
        errores.push('El correo debe tener el formato texto@texto.texto');
        inputCorreo.style.color = 'red';
    } else {
        inputCorreo.style.color = '';
        }
    if (errores.length) {
        mostrarError(errores.join('<br/>'));
    } else {
        ocultarError();
    }
    return usuarioValido && apelidoValido && passwordValido && correoValido;
}

function validarUsuarioModificar() {
    return validarUsuario('#usuarioModificar', '#apellidoModificar', '#passwordModificar', '#correoModificar');
}

function validarMascota (qMascota_id='#mascota_id', qNombre='#nombre', qEdad='#edad') {
    const inputId = document.querySelector(qMascota_id);
    const inputNombre = document.querySelector(qNombre);
    const inputEdad = document.querySelector(qEdad);
    const idValido =  inputId.value.match(/^\d{8}$/);
    const nombreValido =  inputNombre.value.match(/^[A-Z].*$/);
    const edadValido =  inputEdad.value.match(/^\d{1,2}$/);
    let errores = [];
    if (!idValido) {
        errores.push('El identificador de la mascota debe estar formado por 8 numeros');
        inputId.style.color = 'red';
    } else {
        inputId.style.color = '';
    }
    if (!nombreValido) {
        errores.push('El nombre debe empezar por mayusculas');
        inputNombre.style.color = 'red';
    } else {
        inputNombre.style.color = '';
    }
    if (!edadValido) {
        errores.push('La edad debe ser de 1 o 2 cifras');
        inputEdad.style.color = 'red';
    } else {
        inputEdad.style.color = '';
        }
        if (errores.length) {
            mostrarError(errores.join('<br/>'));
        } else {
            ocultarError();
        }
    return idValido && nombreValido && edadValido;
}

function validarMascotaModificar() {
    return validarMascota('#mascota_idModificar', '#nombreModificar', '#edadModificar');
}


function validarCitas() {
    const inputId = document.querySelector('#mascota_id');
    const inputFecha = document.querySelector('#fecha');
    const inputDescripcion = document.querySelector('#descripcion');
    const idValido =  inputId.value.match(/^\d{8}$/);
    const fechaValido =  inputFecha.value.match(/^[1-31]*\\d*-[1-12]*\\d*-([2][0][2][4])$/);
    const descripcionValido =  inputDescripcion.value.match(/^[A-Z].*$/);
    let errores = [];
    if (!idValido) {
        alert('El identificador de la mascota debe estar formado por 8 numeros');
        inputId.style.color = 'red';
    } else {
        inputId.style.color = '';
    }
    if (!fechaValido) {
        alert('Las citas debe tener el formato debe tener el formato dd-mm-yyy');
        inputFecha.style.color = 'red';
    } else {
        inputFecha.style.color = '';
    }
    if (!descripcionValido) {
        alert('Empieza por mayuscula');
        inputDescripcion.style.color = 'red';
    } else {
        inputDescripcion.style.color = '';
        }
        if (errores.length) {
            mostrarError(errores.join('<br/>'));
        } else {
            ocultarError();
        }
    return idValido && fechaValido && descripcionValido;
}