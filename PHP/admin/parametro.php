<?php 


if(isset($_GET['edit'])) {
    $stid = oci_parse($conn, 'select * from parametro where id_parametro = '.$_GET['id'].'');
    oci_execute($stid);
    $parametro = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_parametro.update_parametro(".$_GET['id'].",'".$_POST['des']."'); END;");
    oci_execute($stid);
    header ("Location: ?pag=admin/parametro");
}

$stid = oci_parse($conn, ' select * from parametro order by id_parametro DESC');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $filas .=  '
          <tr>

            <td><center>'.utf8_encode($row['NOMBRE']).'</center></td>
            <td><center>'.($row['DESCRIPCION']).'</center></td>
            <td><center>
                  <a href="?pag=admin/parametro&edit=1&id='.$row['ID_PARAMETRO'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}
?>