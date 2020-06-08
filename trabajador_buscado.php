<?php
require_once 'ConexionBD.php';
require_once 'Trabajador.php';
?>
<!DOCTYPE html>
<html>
    <title>SERIEFLIX</title>
        <meta charset="UTF-8" />
        <body>
            <center><h1>SERIEFLIX, S.L</h1>
            <h3>BÚSQUEDA DE TRABAJADORES</h3>
            <br />
            <FONT SIZE=4>
        
            <?php
                $buscar = Trabajador::listar(); ?>
            <script>
                function eliminar(COD_TRABAJADOR) {
                    var res = window.confirm("¿Está seguro de eliminar al trabajador : "+COD_TRABAJADOR+"?");
                    if (res) {
                     location.href = "./controlador/generoControl.php?accion=eliminar&COD_TRABAJADOR="+COD_TRABAJADOR;;
                    }
                }
            </script>

            <p>¿Quiere volver a la página principal?</p>
            <br />
            <form action='' method="post">
                <input type="submit" name="menu" value="Volver al menú" />
            
            <?php
              if (isset($_POST['menu'])) {
                header('Location:./inicio1.php');
              }  
            ?>
            </form>
            </FONT>
            </center>
        </body>
</html>

