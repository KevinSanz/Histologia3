<?php
    include ('funciones.php');
    $mysqli = conectaBBDD();
    
    $usuario_nombre = $_POST['usuario_nombre'];
    $usuario_clave = $_POST['usuario_clave'];
    echo $usuario_nombre;
    $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where DNI = '$usuario_nombre' ");
    $numero_dnis = $resultado_consulta -> num_rows;
    if ($numero_dnis > 0 ){
        $r = $resultado_consulta -> fetch_array();
        $dni = $r['DNI'];
        $password = $r['Password'];
        $tipo = $r['tipo'];
        if(usuario_clave == $password){
            $subconsulta = "SELECT * FROM imagen";
            $resultado_consulta = $mysqli ->query($subconsulta);
            $array_img = $resultado_consulta -> fetch_array();
            require 'menu_inicio.php';
            }
            
            else{
                require 'inicio.php';
            }
    }
    else{
        require 'index.php';
    }
        ?>
?>


