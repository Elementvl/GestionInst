/*Agregar*/
document.addEventListener('DOMContentLoaded', function() {
    var crearButton = document.querySelector('.crear button');
    var popup = document.getElementById('popup-agregar');
    var cancelarButton = document.getElementById('cancelar');
    var guardarButton = document.getElementById('guardar');

    crearButton.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    cancelarButton.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    guardarButton.addEventListener('click', function() {
        // Aquí puedes agregar el código para guardar la información
        // y luego cerrar el popup si es necesario.
        // Por ejemplo:
        // GuardarDatos();
        // popup.style.display = 'none';
    });
});

/*Editar*/
function abrirPopupEditar(ci, nombre, apellido, fecha_nac, rol) {
    var popupEditar = document.getElementById('popup-editar');
    popupEditar.style.display = 'block';

    document.getElementById('cedula-editar').value = ci;
    document.getElementById('nombre-editar').value = nombre;
    document.getElementById('apellido-editar').value = apellido;
    document.getElementById('fecha_nac-editar').value = fecha_nac;
    document.getElementById('rol-editar').value = rol;
}


function cerrarPopupEditar() {
    var popupEditar = document.getElementById('popup-editar');
    popupEditar.style.display = 'none';
}

/*Eliminar*/
function confirmarBorrar(ci) {
    var popupBorrar = document.getElementById('popup-borrar');
    popupBorrar.style.display = 'block';

    // Asignar el valor de ci al botón de confirmar para que puedas utilizarlo cuando se confirme el borrado
    document.getElementById('confirmar-borrar').setAttribute('onclick', 'borrarUsuario("'+ci+'")');
}

function cerrarPopupBorrar() {
    var popupBorrar = document.getElementById('popup-borrar');
    popupBorrar.style.display = 'none';
}

function borrarUsuario(ci) {
    // Aquí puedes agregar tu código para borrar el usuario con la cédula 'ci'
    cerrarPopupBorrar(); // Cierra el pop-up después de confirmar
}

/*Gestionar telefonos*/
function verTelefonos() {
    var popupTelefonos = document.getElementById('popup-telefonos');
    popupTelefonos.style.display = 'block';
}


function cerrarPopupTelefonos() {
    var popupTelefonos = document.getElementById('popup-telefonos');
    popupTelefonos.style.display = 'none';
}
