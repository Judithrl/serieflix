<?php
    require_once '../conexionBD.php';
    require_once '../Genero.php';
    require_once '../Oficina.php';
    require_once '../Trabajador.php';

    $accion= $_REQUEST ['accion'];
    

    switch ($accion) {
        case "agregar":
            $generos = new Genero();
            $generos-> setCOD_GENERO(trim($_REQUEST['COD_GENERO']));
            $generos-> setGenero(trim($_REQUEST['genero']));
            $generos-> setDescripcion(trim($_REQUEST['descripcion']));
            $res = $generos->agregar();
            if ($res == 1) {
                header('Location:../genero_correcto.php');
            } else {
                echo "<script>";
                echo "alert('Hubo un error al agregar el género');";
                echo "location.href='".$_SERVER["HTTP_REFERER"]."';";
                echo "</script>";
            }
            break;

        
        case "agregar2":
            $generos = new Oficina();
            $generos-> setCOD_OFICINA(trim($_REQUEST['COD_OFICINA']));
            $generos-> setJefe(trim($_REQUEST['jefe']));
            $generos-> setPlanta(trim($_REQUEST['planta']));
            $generos-> setNumOficina(trim($_REQUEST['numOficina']));
            $generos-> setAmueblado($_REQUEST['amueblado']);
            $res = $generos->agregar2();
            if ($res == 1) {
                header('Location:../oficina_correcto.php');
            } else {
                echo "<script>";
                echo "alert('Hubo un error al agregar la oficina');";
                echo "location.href='".$_SERVER["HTTP_REFERER"]."';";
                echo "</script>";
            }
            break;


            case "agregar3":
                $generos = new Trabajador();
                $generos-> setCOD_TRABAJADOR(trim($_REQUEST['COD_TRABAJADOR']));
                $generos-> setDni(trim($_REQUEST['dni']));
                $generos-> setNombreCompleto(trim($_REQUEST['nombreCompleto']));
                $generos-> setCorreo(trim($_REQUEST['correo']));
                $generos-> setTelefono(trim($_REQUEST['telefono']));
                $generos-> setGenero(trim($_REQUEST['genero']));
                $generos-> setOficina(trim($_REQUEST['oficina']));
                $res = $generos->agregar3();
                if ($res == 1) {
                    header('Location:../trabajador_correcto.php');
                } else {
                    echo "<script>";
                    echo "alert('Hubo un error al agregar el trabajador seleccionado');";
                    echo "location.href='".$_SERVER["HTTP_REFERER"]."';";
                    echo "</script>";
                }
                break; 

            case "modificar":
                $generos = new Trabajador();
                $generos-> setCOD_TRABAJADOR(trim($_REQUEST['COD_TRABAJADOR']));
                $generos-> setDni(trim($_REQUEST['dni']));
                $generos-> setNombreCompleto(trim($_REQUEST['nombreCompleto']));
                $generos-> setCorreo(trim($_REQUEST['correo']));
                $generos-> setTelefono(trim($_REQUEST['telefono']));
                $generos-> setGenero(trim($_REQUEST['genero']));
                $generos-> setOficina(trim($_REQUEST['oficina']));
                $res = $generos->modificar();
                if ($res == 1) {
                    header('Location:../trabajador_modificado.php');
                } else {
                    echo "<script>";
                    echo "alert('Hubo un error al modificar el trabajador seleccionado');";
                    echo "location.href='".$_SERVER["HTTP_REFERER"]."';";
                    echo "</script>";
                }
                break;

                case "eliminar":
                    $res = (new Trabajador())->eliminar($_REQUEST["COD_TRABAJADOR"]);
                    if ($res == 1) {
                        header('Location:../trabajador_eliminado.php');
                    } else {
                        echo "<script>";
                        echo "alert('Hubo un error al eliminar el trabajador seleccionado');";
                        echo "location.href='".$_SERVER["HTTP_REFERER"]."';";
                        echo "</script>";
                    }
                    break;

                case "buscar":
                    $res = (new Trabajador())->buscar($_REQUEST["COD_TRABAJADOR"]);
                    echo json_encode($res);
                break;

                case "listar":
                    $res = (new Trabajador())->listar();
                    echo json_encode($res);
                break;
    
        default :
            echo "<h1>Intenta entrar a una página no permitida</h1>";
            break;
    }



?>