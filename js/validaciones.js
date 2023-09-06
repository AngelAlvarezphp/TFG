

function validarUsuario () {
    const inputNombre = document.querySelector('#nombre');
    const inputApellido = document.querySelector('#apellido');
    const inputPassword = document.querySelector('#password');
    const inputCorreo = document.querySelector('#correo');
    const usuarioValido =  inputNombre.value.match(/^[A-Z].*$/);
    const apelidoValido = inputApellido.value.match(/^[A-Z].*$/);
    const passwordValido =  inputPassword.value.match(/^[A-Z].*$/);//La validacion de la contraseña no esta terminada
    const correoValido =  inputCorreo.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*$/);
    if (!usuarioValido) {
        alert('El nombre debe empezar por mayusculas');
        inputNombre.style.color = 'red';
    } else {
        inputNombre.style.color = '';
    }
    if (!apelidoValido) {
        alert('El apellido debe empezar por mayusculas');
        inputApellido.style.color = 'red';
    } else {
        inputApellido.style.color = '';
    }
    if (!passwordValido) {
        alert('La contraseña debe tener numeros letras y mayusculas');
        inputPassword.style.color = 'red';
    } else {
        inputPassword.style.color = '';
    }
    if (!correoValido) {
        alert('El correo debe llevar @');
        inputCorreo.style.color = 'red';
    } else {
        inputCorreo.style.color = '';
        }
    return usuarioValido && apelidoValido && passwordValido && correoValido;
}


function validarMascota () {
    const inputId = document.querySelector('#mascota_id');
    const inputNombre = document.querySelector('#nombre');
    const inputEdad = document.querySelector('#edad');
    const idValido =  inputId.value.match(/^\d{8}$/);
    const nombreValido =  inputNombre.value.match(/^[A-Z].*$/);
    const edadValido =  inputEdad.value.match(/^\d{1,2}$/);
    if (!idValido) {
        alert('El identificador de la mascota debe estar formado por 8 numeros');
        inputId.style.color = 'red';
    } else {
        inputId.style.color = '';
    }
    if (!nombreValido) {
        alert('El nombre debe empezar por mayusculas');
        inputNombre.style.color = 'red';
    } else {
        inputNombre.style.color = '';
    }
    if (!edadValido) {
        alert('La edad debe ser de 1 o 2 cifras');
        inputEdad.style.color = 'red';
    } else {
        inputEdad.style.color = '';
        }
    return idValido && nombreValido && edadValido;
}


function validarCitas() {
    const inputId = document.querySelector('#mascota_id');
    const inputFecha = document.querySelector('#fecha');
    const inputDescripcion = document.querySelector('#descripcion');
    const idValido =  inputId.value.match(/^\d{8}$/);
    const fechaValido =  inputFecha.value.match(/^[1-31]*\\d*-[1-12]*\\d*-([2][0][2][4])$/);
    const descripcionValido =  inputDescripcion.value.match(/^[A-Z].*$/);
    if (!idValido) {
        alert('El identificador de la mascota debe estar formado por 8 numeros');
        inputId.style.color = 'red';
    } else {
        inputId.style.color = '';
    }
    if (!fechaValido) {
        alert('Las citas debe tener el formato debe tener el formato dd-mm-yyy y las citas solo estan disponobles a partir de 2024 ');//-------------------------------------------
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
    return idValido && fechaValido && descripcionValido;
}