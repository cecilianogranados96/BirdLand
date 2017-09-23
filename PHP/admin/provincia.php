<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_provincia.delete_provincia('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_provincia.insert_provincia('".$_POST['nombre']."','".$_POST['pais']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_provincia.update_provincia(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['pais']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {    
error_reporting(0);
$stid = oci_parse($conn, "begin :r := pck_provincia.provincia_nombre(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $nombre, 40);
oci_execute($stid);
    
$stid = oci_parse($conn, "begin :r := pck_provincia.pais_id(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $id_pais, 40);
oci_execute($stid);

$stid = oci_parse($conn, "begin :r := pck_pais.pais_nombre(".$id_pais."); end;");
oci_bind_by_name($stid, ':r', $nombre_pais, 40);
oci_execute($stid);

}

$stid = oci_parse($conn, 'select * from provincia');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_pais.pais_nombre(".$row['ID_PAIS']."); end;");
    oci_bind_by_name($stid1, ':r', $clase, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$clase.'</td>
            <td><center>
                  <a href="?pag=admin/provincia&edit=1&id='.$row['ID_PROVINCIA'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from pais');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_PAIS'].'">'.$row['NOMBRE'].'</option>';
}

?>