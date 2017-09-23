<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_orden.delete_orden('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_orden.insert_orden('".$_POST['nombre']."','".$_POST['clase']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_orden.update_orden(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['clase']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {    
    
$stid = oci_parse($conn, "begin :r := pck_orden.orden_nombre(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $nombre, 40);
oci_execute($stid);
    
$stid = oci_parse($conn, "begin :r := pck_orden.clase_id(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $id_clase, 40);
oci_execute($stid);

$stid = oci_parse($conn, "begin :r := pck_clase.clase_nombre(".$id_clase."); end;");
oci_bind_by_name($stid, ':r', $nombre_clase, 40);
oci_execute($stid);

}



$stid = oci_parse($conn, 'select * from orden');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_clase.clase_nombre(".$row['ID_CLASE']."); end;");
    oci_bind_by_name($stid1, ':r', $clase, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$clase.'</td>
            <td><center>
                  <a href="?pag=admin/orden&edit=1&id='.$row['ID_ORDEN'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from clase');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_CLASE'].'">'.$row['NOMBRE'].'</option>';
}

?>