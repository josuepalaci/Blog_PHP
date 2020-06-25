<?php  require 'views/header.php';   ?>

    <div class="contenedor">

        <h2><?php  echo $titulo;   ?></h2>
        <?php  foreach($resultados as $post):   ?>

            <div class="contenedor">
                <div class="post">
                    <article>
                        <h2 class="titulo"><a href="single.php?id=<?php  echo $post['id']; ?>"><?php  echo $post['titulo'];   ?></a></h2>
                        <p class="fecha"><?php  echo fecha($post['fecha']);   ?></p>
                        <div class="thumb"> 
                            <a href="single.php?id=<?php  echo $post['id']; ?>">
                                <img src="<?php echo RUTA;?>/imagenes/<?php echo $post['thumb'];?>"></img>
                            </a>
                        </div>
                        <p class="extracto"><?php  echo $post['extracto'];   ?></p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Leer...</a>
                    </article>
                </div>
            </div>

        <?php  endforeach;   ?>

    <?php  //require 'paginacion.php';   ?>
    </div>
    
<?php  require 'views/footer.php'   ?>