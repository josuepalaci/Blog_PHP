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
    $id=($_POST['id']);
    $thumb_guardada=($_POST['thumb-guardada']);
    $thumb=$_FILES['thumb'];

    if (empty($thumb['name'])) {
        $thumb=$thumb_guardada;
    } else {
        $archivo_subido= '../'.$blog_config['carpeta_imagenes'].$_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'],$archivo_subido);
        $thumb=$_FILES['thumb']['name'];
    }

    $statemet=$conexion->prepare('UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto,thumb = :thumb WHERE id = :id');
    $statemet->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb,
        ':id' => $id
    ));
	
    header('Location:'.RUTA.'/admin');

} else {
    $id_articulo=id_articulo($_GET['id']);
    if (empty($id_articulo)) {
        header('Location:'.RUTA.'/admin');
    }
    $post=obtener_post_por_id($conexion,$id_articulo);
    if (empty($post)) {
        header('Location:'.RUTA.'/admin');
    }
    $post=$post[0];
}
require '../views/editar.view.php';
?>