
function ocultarError() {
    $("#jsAlert").addClass("d-none");
    $("#jsAlert").html('');
}

function mostrarError(msg) {
    $("#jsAlert").removeClass("d-none");
    $("#jsAlert").html(msg);
}


const patterns = {
    empiezaMayuscula: /^[A-Z].*$/,
    password: /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]+$/,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/i,
    idOcho: /^\d{8}$/,
    edad: /^\d{1,2}$/,
    fecha: /^\d{4}-\d{2}-\d{2}$/
};

function validarUsuario (qNombre='#nombre', qApellido='#apellido', qPassword='#password', qCorreo='#correo') {
    
    const inputNombre = document.querySelector(qNombre);
    const inputApellido = document.querySelector(qApellido);
    const inputPassword = document.querySelector(qPassword);
    const inputCorreo = document.querySelector(qCorreo);
    const usuarioValido =  inputNombre.value.match(patterns.empiezaMayuscula);
    const apelidoValido = inputApellido.value.match(patterns.empiezaMayuscula);
    const passwordValido =  inputPassword.value.match(patterns.password);
    const correoValido =  inputCorreo.value.match(patterns.email);
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
    const idValido =  inputId.value.match(patterns.idOcho);
    const nombreValido =  inputNombre.value.match(patterns.empiezaMayuscula);
    const edadValido =  inputEdad.value.match(patterns.edad);
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
    const idValido =  inputId.value.match(patterns.idOcho);
    const fechaValido =  inputFecha.value.match(patterns.fecha);
    const descripcionValido =  inputDescripcion.value.match(patterns.empiezaMayuscula);
    let errores = [];
    if (!idValido) {
        alert('El identificador de la mascota debe estar formado por 8 numeros');
        inputId.style.color = 'red';
    } else {
        inputId.style.color = '';
    }
    if (!fechaValido) {
        alert('La fecha debe tener el formato dd-mm-yyy');
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


function validate(field) {
    const regex = findPattern(field);
    if (regex) {
        if (regex.test(field.value)) {
            jQuery(field).removeClass('is-invalid');
            jQuery(field).addClass('is-valid');
            field.setCustomValidity('');
          } else {
            jQuery(field).removeClass('is-valid');
            jQuery(field).addClass('is-invalid');
            field.setCustomValidity('Error');
          }
    }
}

function findPattern(field) {
    const classes = field.classList;
    for (className of classes) {
        if (patterns[className]) {
            return patterns[className];
        }
    }
    return null;
}

document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated')
    }, false)
  });

  const inputs = document.querySelectorAll('input');

    inputs.forEach((input) => {
        input.addEventListener('keyup', (e) => {
            validate(e.target);
        });
    });
    

    /*
  const usuariosForm = document.querySelector('#usuariosForm');
  if (usuariosForm) {
      usuariosForm.addEventListener('submit', event => {
          if (!validarUsuario()) {
            event.preventDefault()
            event.stopPropagation()
          }
      });
  }
  */
});