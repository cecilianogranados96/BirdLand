<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_canton.delete_canton('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_canton.insert_canton('".$_POST['nombre']."','".$_POST['provincia']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_canton.update_canton(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['provincia']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {    
error_reporting(0);
$stid = oci_parse($conn, "begin :r := pck_canton.canton_nombre(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $nombre, 40);
oci_execute($stid);
    
$stid = oci_parse($conn, "begin :r := pck_canton.provincia_id(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $id_provincia, 40);
oci_execute($stid);

$stid = oci_parse($conn, "begin :r := pck_provincia.provincia_nombre(".$id_provincia."); end;");
oci_bind_by_name($stid, ':r', $nombre_provincia, 40);
oci_execute($stid);

}

$stid = oci_parse($conn, 'select * from canton order by id_provincia,nombre');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_provincia.provincia_nombre(".$row['ID_PROVINCIA']."); end;");
    oci_bind_by_name($stid1, ':r', $clase, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$clase.'</td>
            <td><center>
                  <a href="?pag=admin/canton&edit=1&id='.$row['ID_CANTON'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from provincia');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_PROVINCIA'].'">'.$row['NOMBRE'].'</option>';
}

?>