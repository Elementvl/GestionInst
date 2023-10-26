<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Fijo en Pantalla Grande con Columnas</title>
    <link rel="stylesheet" href="view/css/estilos.css">
</head>

<body>
    <div class="nav">
        <div class="menu-toggle">&#9776;</div>
        <img src="view/img/logo_utu_its.svg" alt="Logo">
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
            <h1>Listado de usuarios</h1>
            <div class="crud">
            
                <div class="opciones-crud">
                    <div class="crear">
                        <button type="button" class="btn-agregar-user btn">Agregar usuario</button>
                            <div id="popup" class="popup-usuarios">
                                <h1>Crear ussuario</h1>
                                <h3>Cedula</h3>
                                <input type="text" placeholder="Campo 1" name="ci" class="cuadros-texto">
                                <h3>Nombre</h3>
                                <input type="text" placeholder="Campo 2" name="nom" class="cuadros-texto">
                                <h3>Apellido</h3>
                                <input type="text" placeholder="Campo 3" name="ape" class="cuadros-texto">
                                <h3>Telefono</h3>
                                <input type="text" name="phone" id="tel" name="tel" class="cuadros-texto">
                                <h3>Fecha de nacimiento</h3>
                                <input type="date" placeholder="Campo 4" name="date" class="cuadros-texto">
                                <h3>Pin</h3>
                                <input type="password" placeholder="Campo 5" class="cuadros-texto">
                                <h3>Rol</h3>
                                <select name="rol" id="" class="select-style">
                                    <option value="">Seleccione un rol</option>
                                    <option value="">Administrativo</option>
                                    <option value="">Docente</option>
                                    <option value="">Estudiante</option>
                                    <option value="">Funcionario</option>
                                    
                                </select>
                                <div class="popup-buttons">
                                    <button id="guardar" name="btn-add" class="btn">Guardar</button>
                                    <button id="cancelar" class="btn">Cancelar</button>
                                </div>
                            </div>
                        <select class="select-style">
                            <option value="">Ver todos los usuarios</option>
                            <option value="">Ver administrativos</option>
                            <option value="">Ver estudiantes</option>
                            <option value="">Ver docentes</option>
                            <option value="">Ver funcionarios</option>
                            <option value="">Ver visitantes</option>
                        </select>
                    </div>
                    <div class="buscar">
                        <input type="text" class="cuadros-texto" placeholder="Buscar usuario..." id="">
                    </div>
                </div>
                <div class="tabla">
                    <table class="tabla-usuarios">
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                                
                            if(isset($datos)){

                                foreach ($datos as $dato) {
                                echo "<tr><td>".$dato["ci"]."</td><td>".$dato["nombre"]."</td><td>".$dato["apellido"]
                                ."</td><td>".$dato["fech_nac"]."</td><td>".$dato["rol"]."</td><td>".$dato["baja"]."</td></tr>";}
                                }
                                         
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="view/js/menu.js"></script>
</body>
</html>
