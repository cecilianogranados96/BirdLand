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
    
    
    echo $_SESSION['id_persona'].$_POST['ave'].$_POST['lat'].$_POST['lon'];
    
    /*
    $stid = oci_parse($conn, "BEGIN pck_orden.insert_orden('".$_POST['nombre']."','".$_POST['clase']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
        */
    
    
}

?>
