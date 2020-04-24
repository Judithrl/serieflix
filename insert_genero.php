<!DOCTYPE html>
<html>
<title>SERIEFLIX</title>
    <meta charset="UTF-8" />
    <body>
        <center><h1>SERIEFLIX, S.L</h1>
        <h3>INTRODUZCA GÉNERO DE SERIE A TRABAJAR</h2>
        <br />
        <form action='' method="post">
            <?php
                //include_once 'Genero.php';
                
                require_once 'Genero.php';
                $insert_gen = new Genero();

                if (isset($_POST['enviar'])) {
                     
                        $insert_gen->agregar();
                        //$insert_gen->agregar($$COD_GENERO, $genero, $descripcion);
                    
                }
                
            ?>
        <FONT SIZE=4>
            <table>
                <tr>
                    <td align="left"><label>Código de género:</label>
                    <input type="number" name="codigo" required min="1001" /></td>
                </tr>
                <tr>
                    <td align="left"><label>Género:</label>
                    <table height="300" width="400">
                        <tr>
                        <td><input type="radio" id="terror" name="generos" value="Terror">
                        <label for="terror">Terror</label></td>

                        <td><input type="radio" id="fantasia" name="generos" value="Fantasia">  
                        <label for="fantasia">Fantasía</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="cienciaficcion" name="generos" value="Ciencia-Ficcion">
                        <label for="cienciaficcion">Ciencia-Ficción</label></td>

                        <td><input type="radio" id="accion" name="generos" value="Accion">
                        <label for="accion">Acción</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="musical" name="generos" value="Musical">
                        <label for="musical">Musical</label></td>

                        <td><input type="radio" id="belica" name="generos" value="Belica">
                        <label for="belica">Bélica</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="infantil" name="generos" value="Infantil">
                        <label for="infantil">Infantil</label></td>

                        <td><input type="radio" id="gore" name="generos" value="Gore">
                        <label for="gore">Gore</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="western" name="generos" value="Western">
                        <label for="westerm">Western</label></td>

                        <td><input type="radio" id="comedia" name="generos" value="Comedia">
                        <label for="comedia">Comedia</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="romance" name="generos" value="romance">
                        <label for="romance">Romance</label></td>

                        <td><input type="radio" id="suspense" name="generos" value="Suspense">
                        <label for="suspense">Suspense</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="tragicomedia" name="generos" value="Tragicomedia">
                        <label for="tragicomedia">Tragicomedia</label></td>

                        <td><input type="radio" id="documental" name="generos" value="Documental">
                        <label for="documental">Documental</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="aventura" name="generos" value="Aventura">
                        <label for="aventura">Aventura</label></td>

                        <td><input type="radio" id="policiaca" name="generos" value="Policiaca">
                        <label for="policiaca">Policíaca</label><br /></td>
                        </tr>
                        <tr>
                        <td><input type="radio" id="telenovela" name="generos" value="Telenovela">
                        <label for="telenovela">Telenovela</label></td>

                        <td><input type="radio" id="anime" name="generos" value="Anime">
                        <label for="anime">Anime</label></td>
                        </tr>
                    <table>
                </td>
                 </tr>
                 <tr>
                    <td align="left"><label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" rows="4" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td align="left"><input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="limpiar" value="Limpiar">
                    </td>
                </tr>
            <table>

        </center>
        </form>
        </FONT>
    </body>
</html>
