document.addEventListener('DOMContentLoaded', function() {
    var menu = document.querySelector('.menu');
    var menuToggle = document.querySelector('.menu-toggle');
    var content = document.querySelector('.content');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('open');
        content.classList.toggle('open');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var crearButton = document.querySelector('.crear button');
    var popup = document.getElementById('popup');
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