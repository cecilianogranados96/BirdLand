<?php 
##################################################################
# 
# OBJETIVO:
# =========
#
# Edicion de usuarios
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
    if (isset($_GET['id'])){
        $usuario = $_GET['id'];
        $url = '&id='.$_GET['id'];
    }else{
        $usuario = $_SESSION['id_persona'];
        $url = '';
    }
    $consul = 'select * from table(pck_persona.persona_usuario('.$usuario.'))';
    $stid = oci_parse($conn, $consul);
    oci_execute($stid);
    $persona = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
    if(isset($_GET['edit'])) {
        $foto_url = $persona['FOTO'];
        if ($_FILES['foto']['name'] != ''){
            $uploaddir = 'images/users/';
            $foto_url = $usuario.rand().$_FILES['foto']['name'];
            $uploadfile = $uploaddir.basename($foto_url);
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }
        if ($_POST['pass'] == ""){
            $pass = $persona['CONTRASENA'];
        }else{
            $pass = $_POST['pass'];
        }
        $stid = oci_parse($conn, "BEGIN pck_persona.update_p(".$usuario.",'".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['profesion']."',".$_POST['tipo'].",'".$_POST['fecha']."','".$foto_url."','".$_POST['user']."','".md5($pass)."','".$pass."'); END;");
        oci_execute($stid);

        if(isset($_GET['id'])){
           header ("Location: ?pag=admin/usuarios");
        }else{
           header ("Location: ?pag=editar_usuario");
        } 
    }

?>