<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <li><a href="IngresosCrudController.php">Gestionar ingresos</a></li>
            </ul>
        </div>

        <div>
            
        </div>

        <div class="content perfil">

            <div style="display: flex; flex-direction: column; width: 50%;">
                <div>
                    <h1>Mi perfil</h1>
                </div>
                <div style="display: flex; width: 100%;">
                <div class="perfil-col-1">

                    <div>
                        <h3>Cedula:</h3>
                        <p><?php foreach ($pers_data as $data) { echo $data['ci'];}?></p>
                    </div>

                    <div>
                        <h3>Nombre:</h3>
                        <p><?php foreach ($pers_data as $data) { echo $data['nombre'];}?></p>
                    </div>

                    <div>
                        <h3>Apellido:</h3>
                        <p><?php foreach ($pers_data as $data) { echo $data['apellido'];}?></p>
                    </div>

                    <div>
                        <h3>Fecha de nacimiento:</h3>
                        <p><?php foreach ($pers_data as $data) { echo $data['fech_nac'];}?></p>
                    </div>
                    </div>
                    <div class="perfil-col-2">
                    <div>
                        <h3>Telefono:</h3>
                        <button class="btn">Ver telefonos</button>
                    </div>

                    <div>
                        <h3>Rol:</h3>
                        <p><?php foreach ($pers_data as $data) { 
                            if($data['rol']=="est"){
                                echo "Estudiante";
                            }else if($data['rol']=="adm"){
                                echo "Administrativo";
                            }else  if($data['rol']=="visit"){
                                echo "Visitante";
                            }else  if($data['rol']=="docente"){
                                echo "Docente";
                            }else  if($data['rol']=="func"){
                                echo "Funcionario";
                                }
                            }?></p>
                    </div>

                    <div>
                        <h3>Pin:</h3>
                        <button class="btn">Cambiar pin</button>
                    </div>

                    </div>
                </div>
            </div>
            
            

            <div class="info-ingresos-user">
                <div>
                    <h2>Ingresos</h2>
                </div>
                <div>
                    <h4>Ultimo ingreso:</h4>
                    <p>25/01/2023 - 10:45 AM</p>
                </div>
                <div>
                    <h4>Cantidad de ingresos:</h4>
                    <p>20</p>
                </div>
                
            </div>
        </div>

    <script src="../view/js/menu.js"></script>
</body>
</html>