<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_pais.delete_pais('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_pais.insert_pais('".$_POST['nombre']."','".$_POST['continente']."'); END;");
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Insertado con exito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_pais.update_pais(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['continente']."); END;");
    oci_execute($stid);
    $mensaje = '
            <div class="alert alert-success"> 
                <h2 class="titulo"><br><center>Actualizado con exito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {    
error_reporting(0);
$stid = oci_parse($conn, "begin :r := pck_pais.pais_nombre(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $nombre, 40);
oci_execute($stid);
    
$stid = oci_parse($conn, "begin :r := pck_pais.continente_id(".$_GET['id']."); end;");
oci_bind_by_name($stid, ':r', $id_continente, 40);
oci_execute($stid);

$stid = oci_parse($conn, "begin :r := pck_continente.continente_nombre(".$id_continente."); end;");
oci_bind_by_name($stid, ':r', $nombre_continente, 40);
oci_execute($stid);

}

$stid = oci_parse($conn, 'select * from pais order by id_continente,nombre');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $stid1 = oci_parse($conn, "begin :r := pck_continente.continente_nombre(".$row['ID_CONTINENTE']."); end;");
    oci_bind_by_name($stid1, ':r', $clase, 40);
    oci_execute($stid1);
    $filas .=  '
          <tr>
            <td><center>
                '.$row['NOMBRE'].'
            </td>
            <td><center>'.$clase.'</td>
            <td><center>
                  <a href="?pag=admin/pais&edit=1&id='.$row['ID_PAIS'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from continente');
oci_execute($stid);
$opciones = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $opciones .=  '<option value="'.$row['ID_CONTINENTE'].'">'.$row['NOMBRE'].'</option>';
}

?>