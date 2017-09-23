<?php
$stid = oci_parse($conn, 'select * from clase');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_CLASE'].'">'.$row['NOMBRE'].'</option>';
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
