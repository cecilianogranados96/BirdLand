<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_ave.delete_ave('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}


if(isset($_GET['especie'])) {
    $stid = oci_parse($conn, "BEGIN pck_ave.update_ave_especie(".$_GET['id'].",'".$_GET['especie']."'); END;");
    oci_execute($stid);
    header ("Location: ?pag=".$_GET['pag']."&edit=1&id=".$_GET['id']."");
}

if(isset($_GET['edit'])) {
    
$stid = oci_parse($conn, 'select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo, ave.tamano, ave.imagen, color.id_color colorid, tipo.id_tipo tipoid from ave inner join especie on ave.id_especie = especie.id_especie inner join tipo on ave.id_estado = tipo.id_tipo inner join color on ave.id_color = color.id_color where ave.id_ave = '.$_GET['id'].'');
oci_execute($stid);
$ave = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
}

if(isset($_GET['edit_normal'])) {
$foto_url = $ave['IMAGEN'];
if ($_FILES['foto']['name'] != ''){
    $uploaddir = 'images/aves/';
    $foto_url = $_SESSION['id_persona'].$_FILES['foto']['name'];
    $uploadfile = $uploaddir.basename($foto_url);
    move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
}
    
   
    $stid2 = oci_parse($conn, "BEGIN pck_ubicaciones.delete_ubicacion(".$_GET['id']."); END;");
    oci_execute($stid2);
    
    foreach ($_POST['ubicaciones'] as $option_value)
    {
        $stid = oci_parse($conn, "BEGIN pck_ubicaciones.insert_ubicacion(".$_GET['id'].",".$option_value."); END;");
        oci_execute($stid);        
    }
    
    
$stid = oci_parse($conn, "BEGIN pck_ave.update_ave(".$_GET['id'].",".$_POST['color'].",".$_POST['tipo'].",'".$_POST['nombre']."','".$_POST['tamano']."','".$foto_url."'); END;");

oci_execute($stid);
//header ("Location: ?pag=".$_GET['pag']."&edit=1&id=".$_GET['id']."");
   
}



if (isset($_POST['busqueda'])){
    $extra = "where especie.nombre = '".$_POST['busqueda']."'
    or color.nombre = '".$_POST['busqueda']."'
    or ave.tamano = '".$_POST['busqueda']."'
    or ave.nombre_comun = '".$_POST['busqueda']."' ";    
}else{
    $extra = "";
}
$stid = oci_parse($conn, '
select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo, ave.tamano, ave.imagen from ave 
inner join especie on ave.id_especie = especie.id_especie
inner join tipo on ave.id_estado = tipo.id_tipo
inner join color on ave.id_color = color.id_color '.$extra.'');
oci_execute($stid);
$filas = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $filas .=  '
          <tr>
            <td><center><img src="images/aves/'.$row['IMAGEN'].'" style="    width: 30%;" class="img-rounded"></center></td>
            <td class="text-center"><center>'.$row['NOMBRE'].'</center></td>
            <td><center>'.$row['ESPECIE'].'</center></td>
            <td><center>'.$row['COLOR'].'</center></td>
            <td><center>'.$row['TIPO'].'</center></td>
            <td><center>'.$row['TAMANO'].'CM</center></td>
            <td><center>
                  <a href="?pag=admin/ave&edit=1&id='.$row['ID_AVE'].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from color');
oci_execute($stid);
$colores = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $colores .=  '<option value="'.$row['ID_COLOR'].'">'.$row['NOMBRE'].'</option>';
}


$stid = oci_parse($conn, 'select * from tipo');
oci_execute($stid);
$tipos = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $tipos .=  '<option value="'.$row['ID_TIPO'].'">'.$row['NOMBRE'].'</option>';
}


$stid = oci_parse($conn, "select pais.nombre || ' ' || provincia.nombre || ' ' || canton.nombre ubicacion, canton.id_canton from continente 
inner join pais on pais.id_continente = continente.id_continente
inner join provincia on pais.id_pais = provincia.id_pais
inner join canton on provincia.id_provincia = canton.id_provincia order by provincia.nombre,canton.nombre ASC ");
oci_execute($stid);
$ubicaciones =  '';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $ubicaciones .=  '<option value="'.$row['ID_CANTON'].'">'.$row['UBICACION'].'</option>';
}





?>