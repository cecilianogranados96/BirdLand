<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Login de usuarios
#
# Desarrollo:
# 
# - JOSE ANDRES CECILIANO GRANADOS
#
# Mejoras:
# 
# - SILVIA CALDERON NAVARRO
#
###################################################################
    if(isset($_GET['nuevo'])) {    
        $consulta = "begin pck_persona.insert_p('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."',
        '".$_POST['profesion']."',3,TO_DATE('".$_POST['fecha']."', 'yyyy-mm-dd'),'".$_POST['user']."','".md5($_POST['pass'])."','".$_POST['pass']."'); end;"; 
        $stid = oci_parse($conn, $consulta);
        oci_execute($stid);
        echo '<script>alert("Usuario creado con éxito");</script>';
    }
    if(isset($_GET['verificar'])) {
            $stid = oci_parse($conn, "begin :r := pck_persona.tipo_persona('".$_POST['user']."','".md5($_POST['pass'])."'); end;");
            oci_bind_by_name($stid, ':r', $tipo, 40);
            $r = oci_execute($stid);

            $stid = oci_parse($conn, "begin :r := pck_persona.id_persona('".$_POST['user']."','".md5($_POST['pass'])."'); end;");
            oci_bind_by_name($stid, ':r', $id_persona, 40);
            $r = oci_execute($stid);
        if ($tipo == ''){
            echo '<script>alert("Error: usuario o contraseña incorrectos");</script>';
        }else{
            echo '<script>alert("¡Conectado con éxito!");</script>';
            session_start();
            $_SESSION["id_persona"]=$id_persona;
            $_SESSION["tipo"]=$tipo;
            header ("Location: ?pag=usuario-detalle");
        }
    }
?>