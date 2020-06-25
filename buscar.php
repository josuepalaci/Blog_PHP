<?php  
require 'admin/config.php';
require 'functions.php';

$conexion=conexcion($db_config);
if (!$conexion) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda=limpiardatos($_GET['busqueda']);

    $statement= $conexion->prepare('
        SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda
        ');
    $statement->execute(array(
        ':busqueda'=>"%$busqueda%"
    ));
    $resultados=$statement->fetchAll();

    if(empty($resultados)){
        $titulo = 'No se encontraron articulos con : '.$busqueda;
    }else {
        $titulo='Resultado de la busqueda de : '.$busqueda;
    }
} else {
    header('Location: '.RUTA.'/index.php');
}

require 'views/buscar.view.php';
?> 