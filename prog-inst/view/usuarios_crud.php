<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Fijo en Pantalla Grande con Columnas</title>
    <link rel="stylesheet" href="../view/css/estilos.css">
    <script src="https://kit.fontawesome.com/3ee734fc3f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="nav">  
        <div class="logo">
            <div class="menu-toggle">&#9776;</div>
            <img src="../view/img/logo_utu_its.svg" alt="Logo">
        </div>
        <div class="sesion">
            <a href=""><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
        </div>
    </div>
    <div class="page">
        <div class="menu">
            <h1>Menú</h1>
            <ul>
                <li><a href="InfoController.php">Informacion personal</a></li>
                <li><a href="UserCrudController.php">Gestionar Usuarios</a></li>
                <li><a href="IngresosCrudController.php">Gestionar ingresos</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Listado de usuarios</h1>
            <div class="crud">
            
                <div class="opciones-crud">
                    <div class="crear">
                        <button type="button" class="btn-agregar-user btn">Agregar usuario</button>
                            <div id="popup-agregar" class="popup-usuarios">
                                <h1>Crear ussuario</h1>
                                <h3>Cedula</h3>
                                <input type="text" placeholder="Cedula" name="ci" class="cuadros-texto">
                                <h3>Nombre</h3>
                                <input type="text" placeholder="Nombre" name="nom" class="cuadros-texto">
                                <h3>Apellido</h3>
                                <input type="text" placeholder="Apellido" name="ape" class="cuadros-texto">
                                <h3>Teléfono</h3>
                                <input type="text" name="phone" placeholder="Teléfono" name="tel" class="cuadros-texto">
                                <h3>Fecha de nacimiento</h3>
                                <input type="date" name="date" class="cuadros-texto">
                                <h3>Rol</h3>
                                <select name="rol" class="select-style">
                                    <option value="">Seleccione un rol</option>
                                    <option value="">Administrativo</option>
                                    <option value="">Docente</option>
                                    <option value="">Estudiante</option>
                                    <option value="">Funcionario</option>
                                </select>
                                <div class="popup-buttons">
                                    <button id="guardar" name="btn-add" class="btn">Guardar</button>
                                    <button id="cancelar" class="btn-2">Cancelar</button>
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
                        <input type="text" class="cuadros-texto" placeholder="Buscar usuario..." name="buscar-user-txt">
                        <input type="button" value="Buscar" class="btn" name="buscar-user-btn">
                    </div>
                </div>
                <div class="tabla">
                    <table class="tabla-usuarios">
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Teléfonos</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                                
                            if(isset($datos)){

                                foreach ($datos as $dato) {
                                    echo "<tr><td>".$dato["ci"]."</td><td>".$dato["nombre"]."</td><td>".$dato["apellido"]."</td><td>".$dato["fech_nac"].
                                    "<td><button id='ver-tel' onclick='verTelefonos()' style='background: none; color: #103cea; border: none;'>Ver teléfonos</button></td></td><td>".$dato["rol"]."</td><td>
                                    <i id='accion-editar' onclick='abrirPopupEditar(\"".$dato['ci']."\",\"".$dato['nombre']."\",\"".$dato['apellido']."\",\"".$dato['fech_nac']."\",\"".$dato['rol']."\")' class='fa-regular fa-pen-to-square' style='color: #103cea; margin-right: 6px;'></i>
                                    <i id='accion-borrar' onclick='confirmarBorrar(\"".$dato['ci']."\")' class='fa-regular fa-trash-can' style='color: #ff0000;'></i></td></tr>";

                                    }
                                }
                                         
                        ?>
                    </table>
                </div>


                <div id="popup-editar" class="popup-usuarios">
                    <h2>Editar usuario</h2>
                    <h3>Cedula</h3>
                    <input type="text" placeholder="Cedula" name="ci-editar" class="cuadros-texto" id="cedula-editar">
                    <h3>Nombre</h3>
                    <input type="text" placeholder="Nombre" name="nom-editar" class="cuadros-texto" id="nombre-editar">
                    <h3>Apellido</h3>
                    <input type="text" placeholder="Apellido" name="ape-editar" class="cuadros-texto" id="apellido-editar">
                    <h3>Fecha de Nacimiento</h3>
                    <input type="date" name="date-editar" class="cuadros-texto" id="fecha_nac-editar">
                    <h3>Rol</h3>
                    <select name="rol-editar" id="rol-editar" class="select-style">
                                    <option value="adm">Administrativo</option>
                                    <option value="docente">Docente</option>
                                    <option value="est">Estudiante</option>
                                    <option value="func">Funcionario</option>
                                    <option value="visit">Visitante</option>
                                </select>
                    <div class="popup-buttons">
                        <button id="guardar" name="btn-edit" class="btn">Guardar</button>
                        <button id="cancelar" class="btn-2" onclick="cerrarPopupEditar()">Cancelar</button>
                    </div>
                </div>


                <div id="popup-borrar" class="popup-usuarios">
                    <h3>¿Está seguro que desea dar de baja este usuario?</h3>
                    <button id="confirmar-borrar" class="btn-3">Confirmar</button>
                    <button id="cancelar-borrar" class="btn-2" onclick="cerrarPopupBorrar()">Cancelar</button>
                </div>

                <div id="popup-telefonos" class="popup-usuarios">
                    <h2>Teléfonos</h2>
                    <table class="tabla-predet">
                        <tr>
                            <td>Telefono</td>
                            <td>Acciones</td>
                        </tr>
                        <tr>
                            <?php
                                
                                if(isset($datos)){
    
                                    foreach ($datos as $dato) {
                                        echo "<tr><td>".$dato["rol"]."</td><td>
                                        <i id='accion-editar' onclick='abrirPopupEditar(\"".$dato['ci']."\",\"".$dato['nombre']."\",\"".$dato['apellido']."\",\"".$dato['fech_nac']."\",\"".$dato['rol']."\")' class='fa-regular fa-pen-to-square' style='color: #103cea; margin-right: 6px;'></i>
                                        <i id='accion-borrar' onclick='confirmarBorrar(\"".$dato['ci']."\")' class='fa-regular fa-trash-can' style='color: #ff0000;'></i></td></tr>";
    
                                        }
                                    }
                                             
                            ?>
                        </tr>
                    </table>
                    <div class="popup-buttons">
                        <button class="btn">Guardar</button>
                        <button class="btn-2" onclick="cerrarPopupTelefonos()">Cerrar</button>
                    </div>

                    <div id="popup-borrar-tel" class="popup-usuarios">
                    <h3>¿Está seguro que desea dar de baja este teléfono?</h3>
                    <button id="confirmar-borrar" class="btn-3">Confirmar</button>
                    <button id="cancelar-borrar" class="btn-2" onclick="cerrarPopupBorrar()">Cancelar</button>
                </div>
                </div>


            </div>
        </div>
    </div>
    
    <script src="../view/js/menu.js"></script>
    <script src="../view/js/funciones_crud_usuarios.js"></script>
</body>
</html>
