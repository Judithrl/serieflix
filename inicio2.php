<!DOCTYPE html>
<html>
    <?php 
    require_once "inicio.php";
    $admin=$_REQUEST['admin'];
            $constante = new Inicio(); 
                if($constante->comprobarAcceso($admin)){
                    header('Location:./index.php');
                }else{ ?>

                <FONT SIZE=6>
                <center> <br /> <br />
                
                <?php
                    echo 'Lo sentimos, usted no puede acceder a la página web de la empresa.';
                    }
                ?>
                </center>
                </FONT>
</html>