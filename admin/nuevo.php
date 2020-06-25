<?php  session_start();

require 'config.php';
require '../functions.php';

$conexion=conexcion($db_config);
comprobar_sesion();
if (!$conexion) {
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $titulo=limpiardatos($_POST['titulo']);
    $extracto=limpiardatos($_POST['extracto']);
    $texto=($_POST['texto']);
    $thumb=$_FILES['thumb']['tmp_name'];

    $archivo_subido='../'.$blog_config['carpeta_imagenes'].$_FILES['thumb']['name'] ;

    move_uploaded_file($thumb,$archivo_subido);
    
    $statemet=$conexion->prepare('
    INSERT INTO articulos (id,titulo,extracto,texto,thumb) VALUES (null,:titulo,:extracto,:texto,:thumb)');

    $statemet->execute(array(
        ':titulo'=>$titulo,
        ':extracto'=>$extracto,
        ':texto'=>$texto,
        ':thumb'=>$_FILES['thumb']['name']
    ));
    header('Location:'.RUTA.'/admin');
}

require '../views/nuevo.view.php';
?>