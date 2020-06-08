<!DOCTYPE html>
<html>
    <head>
        <title>SERIEFLIX</title>
        <meta charset="UTF-8" />
    </head>
    <body>
    <center><h1>SERIEFLIX, S.L</h1>
        <h3>¡EMPIECE A CREAR SU EMPRESA!</h3>
        <br />
                <h2>SE LO HACEMOS TODO MÁS FÁCIL, LA ORGANIZACIÓN<br />
                    DE SU EMPRESA AL ALCANCE DE SU TECLADO.</h2>
        <br/>
                <form action="./inicio2.php" method="post">
                <FONT SIZE=4>
                <p>¿Es usted administrador de la empresa?</p>
                <?php 
                    $administrador = array("Si", "No");
                ?>


                <?php   foreach ($administrador as $admin) { ?>
                    <input type="radio" name="admin" value="<?php echo $admin?>" required><?php echo $admin?>
                <?php  }
                ?>
                <br /> <br />
                <input type="submit" name="enviar" value="Enviar" />
                
        <?php 
 
            class Inicio {
                const ADMINISTRADOR = "Si"; 
                public function __construct() {
                //Constructor vacío.
                }
                public function comprobarAcceso($admin){
                if($admin != self::ADMINISTRADOR){
                    return false;
                }else{
                    return true;
                    }
                } 
       
            }
                ?>
               </FONT>
            </form>

    
        </center>
    </body>
</html>
