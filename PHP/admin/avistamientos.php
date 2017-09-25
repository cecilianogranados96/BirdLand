<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_clase.delete_clase('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}


$stid = oci_parse($conn, "select avistamiento.id_avistamiento,persona.nombre ||' '|| persona.apellido nombre,ave.nombre_comun,avistamiento.foto from avistamiento 
inner join persona on avistamiento.id_persona = persona.id_persona
inner join ave on ave.id_ave = avistamiento.id_ave");
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

   $filas .=  '
        <tr>
            <td><center><img src="images/avistamientos/'.$row['FOTO'].'" style="width: 30%;" class="img-thumbnail"></center></td>
            <td><center>'.$row['NOMBRE_COMUN'].'</center></td>
            <td><center>'.$row['NOMBRE'].'</center></td>
            <td><center><a href="?pag=admin/avistamientos&id='.$row['ID_AVISTAMIENTO'].'" class="btn  btn-danger">Eliminar</button></center></td>
        </tr>';
}
?>