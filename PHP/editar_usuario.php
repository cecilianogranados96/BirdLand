<?php 


$consul = 'select * from persona inner join usuario on usuario.id_persona = persona.id_persona and persona.id_persona = '.$_SESSION['id_persona'].' ';
$stid = oci_parse($conn, $consul);
oci_execute($stid);
$persona = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);


if(isset($_GET['edit'])) {



    
$foto_url = $persona['FOTO'];

if ($_FILES['foto']['name'] != ''){
    $uploaddir = 'images/users/';
    $foto_url = $_SESSION['id_persona'].$_FILES['foto']['name'];
    $uploadfile = $uploaddir.basename($foto_url);
    move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
}
    
    
    
if (isset($_POST['pass'])){
    $pass = $persona['CONTRASENA'];
}else{
    $pass = md5($_POST['pass']);
}
    
 
    $stid = oci_parse($conn, "BEGIN pck_persona.update_p(".$_SESSION['id_persona'].",'".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['profesion']."',3,'".$_POST['fecha']."','".$foto_url."','".$_POST['user']."','".$pass."'); END;");
    oci_execute($stid);

header ("Location: ?pag=editar_usuario");
        
           
}




?>