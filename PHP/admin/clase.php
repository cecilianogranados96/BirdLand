<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_clase.delete_clase('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_clase.insert_clase('".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_clase.update_clase('".$_GET['id']."','".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {     
    $stid = oci_parse($conn, "begin :r := pck_clase.clase_nombre(".$_GET['id']."); end;");
    oci_bind_by_name($stid, ':r', $nombre, 40);
    oci_execute($stid);
}

$stid = oci_parse($conn, 'select * from clase');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $filas .=  '<tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <!--<td><center>CLASE</td> -->
            <td><center>
                  <a href="?pag=admin/clase&edit=1&id='.$row['ID_CLASE'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}
?>