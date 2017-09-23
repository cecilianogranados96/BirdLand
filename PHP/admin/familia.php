<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_familia.delete_familia('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_familia.insert_familia('".$_POST['nombre']."','".$_POST['suborden']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_familia.update_familia(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['suborden']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {    
    error_reporting(0);
$stid = oci_parse($conn, "begin :r := pck_familia.familia_nombre(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $nombre, 40);
oci_execute($stid);
    
$stid = oci_parse($conn, "begin :r := pck_familia.suborden_id(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $id_suborden, 40);
oci_execute($stid);

$stid = oci_parse($conn, "begin :r := pck_suborden.suborden_nombre(".$id_suborden."); end;");
oci_bind_by_name($stid, ':r', $nombre_suborden, 40);
oci_execute($stid);

}



$stid = oci_parse($conn, 'select * from familia');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_suborden.suborden_nombre(".$row['ID_SUBORDEN']."); end;");
    oci_bind_by_name($stid1, ':r', $clase, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$clase.'</td>
            <td><center>
                  <a href="?pag=admin/familia&edit=1&id='.$row['ID_FAMILIA'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from suborden');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_SUBORDEN'].'">'.$row['NOMBRE'].'</option>';
}

?>