<?php  session_start();

// INDEX DEL ADMIN 
require 'config.php';
require '../functions.php';

$conexion=conexcion($db_config);
// comprobar sesion
comprobar_sesion();
if (!$conexion) {
    header('Location: ../error.php');
}
$posts=obterner_post($blog_config['post_por_pag'],$conexion);




require '../views/admin_index.view.php';
?>