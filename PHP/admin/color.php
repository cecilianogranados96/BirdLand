<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_color.delete_color('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_color.insert_color('".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_color.update_color('".$_GET['id']."','".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {     
    error_reporting(0);
    $stid = oci_parse($conn, "begin :r := pck_color.color_nombre(".$_GET['id']."); end;");
    oci_bind_by_name($stid, ':r', $nombre, 40);
    oci_execute($stid);
}

$stid = oci_parse($conn, 'select * from color');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $filas .=  '<tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <!--<td><center>CLASE</td> -->
            <td><center>
                  <a href="?pag=admin/color&edit=1&id='.$row['ID_COLOR'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}
?>