<?php  require '../views/header.php';   ?>

    <div class="contenedor">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn">Nuevo post</a>
        <a href="cerrar.php" class="btn">Cerrar sesion</a>
        <?php  foreach($posts as $post):   ?>

        
                <div class="post">
                    <article>
                        <h2 class="titulo"><?php  echo $post['id'].'.- '.$post['titulo'];  ?></h2>
                        <a href="editar.php?id=<?php echo$post['id'];?>">editar</a>
                        <a href="../single.php?id=<?php echo$post['id'];?>">ver</a>
                        <a href="borrar.php?id=<?php echo$post['id'];?>">borrar</a>
                    </article>
                </div>
          

        <?php  endforeach;   ?>

    <?php  require '../paginacion.php';   ?>
    </div>
    
<?php  require '../views/footer.php'   ?>