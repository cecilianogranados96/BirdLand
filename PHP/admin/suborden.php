<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_suborden.delete_suborden('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_suborden.insert_suborden('".$_POST['nombre']."','".$_POST['orden']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_suborden.update_suborden(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['orden']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {
    error_reporting(0);
    $stid = oci_parse($conn, "begin :r := pck_suborden.suborden_nombre(".$_GET['id']."); end;");
    oci_bind_by_name($stid, ':r', $nombre, 40);
    oci_execute($stid);

    $stid = oci_parse($conn, "begin :r := pck_suborden.orden_id(".$_GET['id']."); end;");
    oci_bind_by_name($stid, ':r', $id_orden, 40);
    oci_execute($stid);

    $stid = oci_parse($conn, "begin :r := pck_orden.orden_nombre(".$id_orden."); end;");
    oci_bind_by_name($stid, ':r', $nombre_orden, 40);
    oci_execute($stid);
}



$stid = oci_parse($conn, 'select * from suborden');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_suborden.orden_nombre(".$row['ID_SUBORDEN']."); end;");
    oci_bind_by_name($stid1, ':r', $orden, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$orden.'</td>
            <td><center>
                  <a href="?pag='.$_GET['pag'].'&edit=1&id='.$row['ID_SUBORDEN'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from orden');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_ORDEN'].'">'.$row['NOMBRE'].'</option>';
}
?>