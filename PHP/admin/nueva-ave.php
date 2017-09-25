<?php 

if(isset($_GET['nuevo'])) {
    
    $uploaddir = 'images/aves/';
    $foto_url = $_SESSION['id_persona'].$_FILES['foto']['name'];
    $uploadfile = $uploaddir.basename($foto_url);
    move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);

    $stid = oci_parse($conn, "BEGIN pck_ave.insert_ave(".$_POST['especie'].",".$_POST['color'].",".$_POST['tipo'].",'".$_POST['nombre']."','".$_POST['tamano']."','".$foto_url."'); END;");
    oci_execute($stid);
    
    $stid = oci_parse($conn, "select id_ave from ave where id_ave = ( select max(id_ave) from ave )");
    oci_execute($stid);
    $max = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);

    foreach ($_POST['ubicaciones'] as $option_value)
    {
        $stid = oci_parse($conn, "BEGIN pck_ubicaciones.insert_ubicacion(".$max['ID_AVE'].",".$option_value."); END;");
        oci_execute($stid);        
    }
    
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}



$stid = oci_parse($conn, "select pais.nombre || ' ' || provincia.nombre || ' ' || canton.nombre ubicacion, canton.id_canton from continente 
inner join pais on pais.id_continente = continente.id_continente
inner join provincia on pais.id_pais = provincia.id_pais
inner join canton on provincia.id_provincia = canton.id_provincia order by provincia.nombre,canton.nombre ASC ");
oci_execute($stid);
$ubicaciones =  '';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $ubicaciones .=  '<option value="'.$row['ID_CANTON'].'">'.$row['UBICACION'].'</option>';
}


$stid = oci_parse($conn, 'select * from color');
oci_execute($stid);
$colores =  '<option value="0">Seleccione una opcion</option>';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $colores .=  '<option value="'.$row['ID_COLOR'].'">'.$row['NOMBRE'].'</option>';
}

$stid = oci_parse($conn, 'select * from tipo');
oci_execute($stid);
$tipos = '<option value="0">Seleccione una opcion</option>';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $tipos .=  '<option value="'.$row['ID_TIPO'].'">'.$row['NOMBRE'].'</option>';
}





?>