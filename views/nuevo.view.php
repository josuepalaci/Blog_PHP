<?php  require '../views/header.php';   ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo Articulo</h2>
            <form enctype="multipart/form-data"   class="formulario"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input type="text" name="titulo" id="titulo" placeholder='titulo'>
                <input type="text" name="extracto" id="extracto" placeholder='extracto'>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="texto del articulo"></textarea>
                <input type="file" name="thumb" id="thumb">
                <input type="submit" value="Subir">
            </form>
        </article>
    </div>
</div>


<?php  require '../views/footer.php'   ?>