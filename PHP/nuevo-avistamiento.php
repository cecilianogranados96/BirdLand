<?php
$stid = oci_parse($conn, "
select ave.id_ave,ave.nombre_comun,genero.nombre || ' ' ||  especie.nombre nombre_cientifico from ave 
inner join especie on ave.id_especie = especie.id_especie
inner join genero on especie.id_genero = genero.id_genero
");
oci_execute($stid);
$aves = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $aves .=  '<option value="'.$row['ID_AVE'].'">'.$row['NOMBRE_COMUN'].' - '.$row['NOMBRE_CIENTIFICO'].'</option>';
}



if(isset($_GET['nuevo'])) {
    
    
    $uploaddir = 'images/avistamientos/';
    $foto_url = $_SESSION['id_persona'].rand().$_FILES['foto']['name'];
    $uploadfile = $uploaddir.basename($foto_url);
    move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        
    
    
    $stid = oci_parse($conn, "BEGIN pck_avistamiento.insert_avistamiento('".$_SESSION['id_persona']."','".$_POST['ave']."','".$_POST['lat']."','".$_POST['lon']."','".$foto_url."'); END;");
    oci_execute($stid);
    echo "<script>alert('Insertado con exito');</script>";      
    header ("Location: ?pag=usuario-detalle");
    
    
}

?>
