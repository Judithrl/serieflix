
<!DOCTYPE html>
<html>
    <title>SERIEFLIX</title>
        <meta charset="UTF-8" />
        <body>
            <center><h1>SERIEFLIX, S.L</h1>
            <h3>INTRODUZCA OFICINA</h2>
            <br />
            <form action='controlador/generoControl.php?accion=agregar2' method="post">
            <FONT SIZE=4>
                <table width=500 height=650>
                    <tr>
                        <td align="left">
                            <label>Código de oficina:</label>
                            <input type="number" name="COD_OFICINA" required />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Jefe a cargo:</label>
                            <input type="text" name="jefe" required />
                        </td>
                    </tr>
                    <tr>
                        <?php 
                            $planta = array(1,2,3,4);
                        ?>
                        <td align="left">
                            <label>Planta:</label><br />
                            <?php   foreach ($planta as $p) { ?>
                                <input type="radio" name="planta" value="<?php echo $p?>" required><?php echo $p?> <br/>
                            <?php  }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Número de oficina:</label>
                            <input type="number" name="numOficina" />
                        </td>
                    </tr>
                    <tr>

    
                        <td align="left">
                        
                        <?php 
                            $amueblado = array('Mesas','Ordenadores','Calefacción', 'Impresora', 'Archivadores',
                            'Biombos', 'Mampara', 'Techo técnico', 'Sillas', 'Aire acondicionado', 'Wi-Fi', 
                            'Fotocopiadora', 'Estanterias', 'Teléfonos', 'Suelo técnico', 'Equipo de fax');
                        ?> 
						
						 <label>Ambueblado a desear:</label><br />
                            <?php   foreach ($amueblado as $m) { ?>
                                <input type="checkbox" name="amueblado" value="<?php echo $m?>"><?php echo $m?><br />
                            <?php  } ?>
                            
                               
                            
                            
                            <em>
                                <?php
                                include_once 'Oficina.php';
                                $check = new Oficina();
                                $check->checkbox();

                                ?>
                            </em>

                        </td> 
                    </tr>
                    <tr>
                        <td align="left"><input type="submit" name="enviar" value="Enviar">
                        <input type="reset" name="limpiar" value="Limpiar">
                        </td>
                    </tr>
                </table>
            </FONT>
            </form>
            </center>
        </body>
</html>