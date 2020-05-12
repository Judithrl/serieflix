<!DOCTYPE html>
<html>
    <title>SERIEFLIX</title>
    <meta charset="UTF-8" />
    <body>
    <?php
        include_once 'Genero.php';
        $fecha = new Genero();
        $fecha->fechahora(); 
 
        ?>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>¡EMPIECE A CREAR SU EMPRESA!</h3>
        <br />
                <h2>SE LO HACEMOS TODO MÁS FÁCIL, LA ORGANIZACIÓN<br />
                    DE SU EMPRESA AL ALCANCE DE SU TECLADO.</h2>
        <br/>
        <FONT SIZE=4>
        <form action='' method="post">
            <table width=600 height=500>
                <tr>
                    <th align="left"><label>¿Quiere introducir un nuevo género?</label><br /><br />
                    <input type="submit" name="genero" value="Género" /></th>
                </tr>
                <tr>
                    <th align="left"><label>¿Quiere introducir una nueva oficina?</label><br /><br />
                    <input type="submit" name="oficina" value="Oficina" /></th>
                 </tr>
                 <tr>
                    <th align="left"><label>¿Desea introducir un trabajador a su empresa?</label><br /><br />
                    <input type="submit" name="trabajador" value="Trabajador" /></th>
                </tr>
                 <tr>
                 <th align="left"><label>Puede ver la lista de sus trabajadores y a continuación eliminarlo o modificarlo:</label><br /><br />
                 <input type="submit" name="buscar" value="Buscar" /></th>
                </tr>
            <table>
        </center>
        </form>
        </FONT>
        <?php
                 

                if (isset ($_POST['genero'])) {
                    header('Location:./insert_genero.php');
                }

                if (isset ($_POST['oficina'])) {
                    header('Location:./insert_oficina.php');
                }

                if (isset ($_POST['trabajador'])) {
                    header('Location:./insert_trabajador.php');
                }

                if (isset ($_POST['buscar'])) {
                    header('Location:./trabajador_buscado.php');
                }
        ?>
    </body>
</html>