<!DOCTYPE html>
<html>
    <head>
        <title>SERIEFLIX</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>INTRODUZCA OFICINA</h2>
        <br />
        <form action="controlador/generoControl.php?accion=agregar2" method="post">
        <FONT SIZE=4>
            <table width=400 height=600>
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
                        $amueblado = array('Mesas','Ordenadores','Calefaccion', 'Impresora', 'Archivadores',
                        'Biombos', 'Mampara', 'Techo tecnico', 'Sillas', 'Aire acondicionado', 'Wi-Fi', 
                        'Fotocopiadora', 'Estanterias', 'Telefonos', 'Suelo tecnico', 'Equipo de fax');
                       
                        ?>

                        <label>Amueblado a desear:</label><br />
                        <table>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Mesas" /> Mesas</td>
                                <td><input type="checkbox" name="amueblado[]" value="Ordenadores"  /> Ordenadores</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Calefaccion" /> Calefaccion</td>
                                <td><input type="checkbox" name="amueblado[]" value="Impresora" /> Impresora</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Archivadores" /> Archivadores</td>
                                <td><input type="checkbox" name="amueblado[]" value="Biombos" /> Biombos </td>
                             
                            </tr>
                            <tr>
                               <td><input type="checkbox" name="amueblado[]" value="Mampara" /> Mampara</td>
                               <td><input type="checkbox" name="amueblado[]" value="Techo tecnico" /> Techo tecnico</td>
                                
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Sillas" /> Sillas</td>
                                <td><input type="checkbox" name="amueblado[]" value="Aire acondicionado" /> Aire acondicionado</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Wi-Fi" /> Wi-Fi</td>
                                <td><input type="checkbox" name="amueblado[]" value="Fotocopiadora" /> Fotocopiadora</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Estanterias" /> Estanterias</td>
                                <td><input type="checkbox" name="amueblado[]" value="Telefonos" /> Telefonos</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="amueblado[]" value="Suelo tecnico" /> Suelo tecnico</td>
                                <td><input type="checkbox" name="amueblado[]" value="Equipo de fax" /> Equipo de fax</td>
                            </tr>
                        </table>
                        <br />
                       
                        
                        
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