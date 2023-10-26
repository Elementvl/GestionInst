<?php
session_start();
require_once("model/PersonasModel.php");

$persona = new PersonasModel();

$datos = $persona->getPersonas();

require_once("view/usuarios_crud.php");

if (isset($_POST['guardar'])) {
    $ci = $_POST['ci'];
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    $tel = $_POST['tel'];
    $correo = $_POST['email'];
    $calle = $_POST['calle'];
    $nPuerta = $_POST['npuerta'];
    $tipo = $_POST['tipo'];
    $clave = $_POST['pass'];

    $persona->insertPersonas($ci, $nombre, $apellido, $tel, $correo, $calle, $nPuerta, $tipo, $clave);

    echo "<script> location.href = location.href;</script>";
}

if (isset($_POST['btn-add'])) {
    $ci = $_POST['ci'];
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    $fecha = $_POST['date'];
    $tel = $_POST['tel'];
	$rol = $_POST['rol'];

    $persona->AddPersona($ci, $nombre, $apellido, $fecha,$rol);
    $persona->AddTel($ci, $tel);
}
?>

