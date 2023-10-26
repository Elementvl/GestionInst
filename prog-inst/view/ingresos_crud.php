<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Fijo en Pantalla Grande con Columnas</title>
    <link rel="stylesheet" href="../view/css/estilos.css">
</head>

<body>
    <div class="nav">
        <div class="menu-toggle">&#9776;</div>
        <img src="../view/img/logo_utu_its.svg" alt="Logo">
    </div>
    <div class="page">
        <div class="menu">
            <h1>Menú</h1>
            <ul>
                <li><a href="#">Informacion personal</a></li>
                <li><a href="#">Gestionar Usuarios</a></li>
                <li><a href="#">Gestionar ingresos</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Listado de ingresos</h1>
            <div class="crud">
            
                <div class="opciones-crud">
                <div class="buscar">
                    <select class="select-style" name="" id="select-filtros">
                        <option value="">Buscar por...</option>
                        <option value="id_ingreso">ID</option>
                        <option value="fyh">Fecha y hora</option>
                        <option value="ci">Cedula</option>
                    </select>
                    <input type="text" class="cuadros-texto" id="text-buscar">
                    <input type="date" class="cuadros-texto" id="input-fecha" style="display: none;">
                    <input type="time" class="cuadros-texto" id="input-hora" style="display: none;">
                    <button class="btn">Buscar</button>
                </div>

                </div>
                <div class="tabla">
                    <table class="tabla-ingresos">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Motivo</th>
                        </tr>
                        <tr>
                        <?php
                                
                            if(isset($datos)){

                                foreach ($datos as $dato) {
                                echo "<tr><td>".$dato["id_ingreso"]."</td><td>".$dato["fecha"]."</td><td>".$dato["hora"]
                                ."</td><td>".$dato["ci"]."</td><td>".$dato["nombre"]."</td><td>".$dato["rol"]."</td>><td>"
                                .$dato["motivo"]."</td></tr>";}
                                }
                                         
                        ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../view/js/menu.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const selectFiltros = document.getElementById('select-filtros');
    const textBuscar = document.getElementById('text-buscar');
    const inputFecha = document.getElementById('input-fecha');
    const inputHora = document.getElementById('input-hora');

    selectFiltros.addEventListener('change', function() {
        const selectedOption = this.value;
        if (selectedOption === 'fyh') {
            textBuscar.style.display = 'none';
            inputFecha.style.display = 'inline-block';
            inputHora.style.display = 'inline-block';
        } else {
            textBuscar.style.display = 'inline-block';
            inputFecha.style.display = 'none';
            inputHora.style.display = 'none';
        }
    });
});

    </script>
</body>
</html>
