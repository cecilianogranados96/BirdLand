<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_clase.delete_clase('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}


$stid = oci_parse($conn, 'select * from persona');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    if ($row['TIPO'] == 1) {$tipo = "ADMINISTRADOR";  }else{ $tipo = "USUARIO";}
   $filas .=  '<tr>
            <td><center>
                '.$row['NOMBRE'].' '.$row['APELLIDO'].'
            </td>
            <td><center>
                '.$row['EMAIL'].'
            </td>
            <td><center>
                '.$tipo.'
            </td>
            <!--<td><center>CLASE</td> -->
            <td><center>
                  <a href="?pag=editar_usuario&id='.$row['ID_PERSONA'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}
?>