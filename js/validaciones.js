

function validarUsuario () {
    const inputNombre = document.querySelector('#nombre');
    const inputApellido = document.querySelector('input[name="apellido"]');
    const usuarioValido =  inputNombre.value.match(/^[A-Z].*$/);
    const apelidoValido = inputApellido.value.match(/^[A-Z].*$/);
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
    return usuarioValido && apelidoValido;
}