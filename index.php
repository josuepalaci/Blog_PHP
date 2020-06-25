<?php  
require 'admin/config.php';
require 'functions.php';

$conexion=conexcion($db_config);
if (!$conexion) {
    header('Location: error.php');
}

$posts= obterner_post($blog_config['post_por_pag'],$conexion);
// print_r($post);
if (!$posts) {
    header('Location: error.php');
}



require 'views/index.view.php'
?>