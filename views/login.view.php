<?php  require 'views/header.php';   ?>


<div class="contenedor">
        <div class="contenedor">
            <div class="post">
                <article>
                    <h2 class="titulo">Inicia Sesion!</h2>
                   <form class="formulario"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <input type="text" name="usuario" id="usuario" placeholder='usuario'>
                        <input type="password" name="password" id="password" placeholder='contraseña'>
                        <input type="submit" value="Entrar">
                   </form>
                </article>
            </div>
        </div>
</div>



    
<?php  require 'views/footer.php'   ?>