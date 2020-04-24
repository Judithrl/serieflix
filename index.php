<!DOCTYPE html>
<html>
    <title>SERIEFLIX</title>
    <meta charset="UTF-8" />
    <body>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>¡EMPIECE A CREAR SU EMPRESA!</h2>
        <br />
                <h2>SE LO HACEMOS TODO MÁS FÁCIL, LA ORGANIZACIÓN<br />
                    DE SU EMPRESA AL ALCANCE DE SU TECLADO.</h1>
        <br/>
        <FONT SIZE=4>
        <form action='' method="post">
            <table>
                <tr>
                    <th align="left"><label>¿Quiere introducir un nuevo género?</label><br />
                    <p><input type="submit" name="genero" value="Género" /></th></p>
                </tr>
                <tr>
                    <th align="left"><label>¿Quiere introducir una nueva oficina?</label><br />
                    <p><input type="submit" name="oficina" value="Oficina" /></th></p>
                 </tr>
                 <tr>
                    <th align="left"><label>¿Desea introducir un trabajador a su empresa?</label><br />
                    <p><input type="submit" name="trabajador" value="Trabajador" /></th></p>
                </tr>
                <tr>
                    <th align="left"><label>¿Desea modificar un trabajador de la lista o bien desea eliminarlo?</label><br />
                    <p><input type="submit" name="modificar" value="Modificar" />
                    <input type="submit" name="eliminar" value="Eliminar" /></th></p>
                 </tr>
                 <tr>
                 <th align="left"><label>Puede buscar a los trabajadores registrados en su empresa según su género asignado:</label><br />
                 <p><input type="submit" name="buscar" value="Buscar trabajador" /></th></p>
                </tr>
            <table>
        </center>
        </form>
        </FONT>
        <?php
                 $genero = (isset($_POST['genero']))?$_POST['genero']:'';
                 $oficina = (isset($_POST['oficina']))?$_POST['oficina']:'';
                 $trabajador= (isset($_POST['trabajador']))?$_POST['trabajador']:'';
                 $modificar= (isset($_POST['modificar']))?$_POST['modificar']:'';
                 $eliminar= (isset($_POST['eliminar']))?$_POST['eliminar']:'';
                 $buscar= (isset($_POST['buscar']))?$_POST['buscar']:'';

                if (isset ($_POST['genero'])) {
                    header('Location:./insert_genero.php');
                }

                if (isset ($_POST['oficina'])) {
                    # code...
                }

                if (isset ($_POST['trabajador'])) {
                    # code...
                }

                if (isset ($_POST['modificar'])) {
                    # code...
                }

                if (isset ($_POST['eliminar'])) {
                    # code...
                }

                if (isset ($_POST['buscar'])) {
                    # code...
                }
        ?>
    </body>
</html>