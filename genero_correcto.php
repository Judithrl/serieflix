<!DOCTYPE html>
<html>
    <title>SERIEFLIX</title>
    <meta charset="UTF-8" />
    <body>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>¡EMPIECE A CREAR SU EMPRESA!</h3>
        <br />
        <form action='' method="post">
            <FONT SIZE=4>
            <p>El género de las series que se quiere trabajar se ha guardado correctamente.<br />
            ¿Quiere voler a la página principal?</p>
            <br />
            <input type="submit" name="menu" value="Volver al menú" />
            </FONT>
            <?php
              if (isset($_POST['menu'])) {
                header('Location:./index.php');
              }  
            ?>
        </form>
    </center>
    </body>
</html>