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
            <p>El nuevo trabajador se ha registrado correctamente.<br />
            ¿Quiere volver a la página principal?</p>
            <br />
            <input type="submit" name="menu" value="Volver al menú" />
            </FONT>
            <?php
              if (isset($_POST['menu'])) {
                header('Location:./inicio1.php');
              }  
            ?>
        </form>
    </center>
    </body>
</html>