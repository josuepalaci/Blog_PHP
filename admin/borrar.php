<?php  session_start();

require 'config.php';
require '../functions.php';

$conexion=conexcion($db_config);
comprobar_sesion();
if (!$conexion) {
    header('Location: ../error.php');
}

$id=limpiardatos($_GET['id']);
if (!($id)) {
    header('Location: '.RUTA.'/admin');
}

$statemen = $conexion->prepare('DELETE FROM articulos WHERE id=:id');
$statemen->execute(array(':id'=>$id));

header('Location: '.RUTA.'/admin');

?>