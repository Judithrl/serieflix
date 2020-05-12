<?php

require_once 'Trabajador.php';

if (isset($_REQUEST["COD_TRABAJADOR"])) {
    $buscar = (new Trabajador())->buscar($_REQUEST["COD_TRABAJADOR"]);
    $readonly = "readonly";

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>SERIEFLIX</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <center>
        <h1>SERIEFLIX, S.L</h1>
        <h3>MODIFIQUE TRABAJADOR</h2>
        <br />
        <form action="./controlador/generoControl.php?accion=modificar" method="post">
            <FONT SIZE=4>
                <table width=400 height=300>
                    <tr>
                        <td align="left">
                            <label>Código de trabajador:</label>
                            <input type="number" name="COD_TRABAJADOR" value="<?= $buscar["COD_TRABAJADOR"] ?>" <?= $readonly ?> />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>DNI:</label>
                            <input type="text" name="dni" value="<?= $buscar["dni"] ?>" min=9 />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Nombre completo:</label>
                            <input type="text" name="nombreCompleto" value="<?= $buscar["nombreCompleto"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Correo electrónico:</label>
                            <input type="text" name="correo" value="<?= $buscar["correo"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Número de teléfono:</label>
                            <input type="text" name="telefono" value="<?= $buscar["telefono"] ?>" min=9 />
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Género: </label>
                            <select name="genero">
                                <?php
                                    $host = "localhost"; 
                                    $user = "root"; 
                                    $pwd = "2asir"; 
                                    $enlace = mysqli_connect($host, $user, $pwd); 
                                    mysqli_select_db($enlace, "serieflix");

                                    $consulta = "SELECT COD_GENERO FROM genero";
                                    
                                    $resultado=mysqli_query($enlace, $consulta);
                                    if (mysqli_num_rows($resultado)){
                                        while($fila=mysqli_fetch_row($resultado)){ ?>
                                            <option value="<?php echo $fila[0]?>"><?php echo $fila[0]?> </option>
                                <?php } 
                                
                                } 
                                mysqli_free_result($resultado);
                                ?>
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Oficina: </label>
                            <select name="oficina">
                                <?php
                                    $host = "localhost"; 
                                    $user = "root"; 
                                    $pwd = "2asir"; 
                                    $enlace = mysqli_connect($host, $user, $pwd); 
                                    mysqli_select_db($enlace, "serieflix");

                                    $consulta = "SELECT COD_OFICINA FROM oficina";
                                    
                                    $resultado=mysqli_query($enlace, $consulta);
                                    if (mysqli_num_rows($resultado)){
                                        while($fila1=mysqli_fetch_row($resultado)){ ?>
                                            <option value="<?php echo $fila1[0]?>"><?php echo $fila1[0]?> </option>
                                <?php } 
                                
                                }   
                                mysqli_free_result($resultado);
                                mysqli_close($enlace);

                                ?>
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="submit" name="modificar" value="Modificar">
                            <input type="reset" name="limpiar" value="Limpiar">
                        </td>
                    </tr>
                </table>
            </FONT>
        </form>
        </center>
    </body>
</html>