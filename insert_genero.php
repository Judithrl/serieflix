<!DOCTYPE html>
<html>
<title>SERIEFLIX</title>
    <meta charset="UTF-8" />
    <body>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>INTRODUZCA GÉNERO DE SERIE A TRABAJAR</h2>
        <br />
        <form action='controlador/generoControl.php?accion=agregar' method="post">
     
        <FONT SIZE=4>
            <table height=600 width=450>
                <tr>
                    <td align="left"><label>Código de género:</label>
                    <input type="number" name="COD_GENERO" required min="1000" /></td>
                </tr>
                <tr>
                    <?php 
                        $generos = array('Terror','Fantasia','Ciencia-Ficcion', 'Accion', 'Musical', 'Belica', 'Infantil', 'Gore', 'Western', 'Comedia', 'Romance',
                        'Suspense', 'Tragicomedia', 'Documental', 'Aventura', 'Policiaca', 'Telenovela', 'Anime');
                    ?>
                    <td align="left">
                        <label>Género:</label><br /> <br />
                        <?php   foreach ($generos as $g) { ?>
                            <input type="radio" name="genero" value="<?php echo $g?>" required><?php echo $g?> <br/>
                        <?php  }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align="left"><label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" rows="4" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td align="left"><input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="limpiar" value="Limpiar">
                    </td>
                </tr>
            <table>
        </center>
        </form>
        </FONT>
    </body>
</html>
