<?php  require '../views/header.php';   ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar Articulo</h2>
            <form enctype="multipart/form-data" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

                <input type="hidden" name="id" value="<?PHP echo $post['id']; ?>" >
                <input type="text" name="titulo" id="titulo" value="<?PHP echo $post['titulo']; ?>" >
                <input type="text" name="extracto" id="extracto" value="<?PHP echo $post['extracto']; ?>">
                <textarea name="texto" id="texto" cols="30" rows="10"><?PHP echo $post['texto']; ?></textarea>
                <input type="file" name="thumb" id="thumb" >
                <input type="hidden" name="thumb-guardada" value="<?PHP echo $post['thumb']; ?>">

                <input type="submit" value="Subir">
            </form>
        </article>
    </div>
</div>


<?php  require '../views/footer.php'   ?>