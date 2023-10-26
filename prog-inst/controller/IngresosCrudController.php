<?php
session_start();
require_once("../model/PersonasModel.php");
require_once("../model/IngresoModel.php");

$persona = new PersonasModel();
$ingresos = new IngresoModel();
$datos = $ingresos->getIngresos();

require_once("../view/ingresos_crud.php");


?>
