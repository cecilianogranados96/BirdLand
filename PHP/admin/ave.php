<?php 
if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_ave.delete_ave('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' 
            <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con éxito</center></h2>
           </div>';
}

if(isset($_GET['especie'])) {
    $stid = oci_parse($conn, "BEGIN pck_ave.update_ave_especie(".$_GET['id'].",'".$_GET['especie']."'); END;");
    oci_execute($stid);
    header ("Location: ?pag=".$_GET['pag']."&edit=1&id=".$_GET['id']."");
}

//?
if(isset($_GET['edit'])) {
    $stid = oci_parse($conn, "select * from table(pck_ave.select_ave('".$_GET['id']."'))");
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
    header ("Location: ?pag=".$_GET['pag']."&edit=1&id=".$_GET['id']."");
}

//?
if (isset($_POST['busqueda'])){
    $extra = "where especie.nombre LIKE '%".$_POST['busqueda']."%'
    or color.nombre LIKE '%".$_POST['busqueda']."%'
    or ave.tamano LIKE '%".$_POST['busqueda']."%'
    or ave.nombre_comun LIKE '%".$_POST['busqueda']."%' ";    
}else{
    $extra = "";
}

//$stid = oci_parse($conn, 'select * from table(PCK_AVE.AVE_TIPO(NULL))'.$extra.'');
$stid = oci_parse($conn, '
select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo, ave.tamano, ave.imagen from ave 
inner join especie on ave.id_especie = especie.id_especie
inner join tipo on ave.id_estado = tipo.id_tipo
inner join color on ave.id_color = color.id_color '.$extra.'');
oci_execute ($stid,OCI_DEFAULT);  
$Num_Rows = oci_fetch_all($stid, $row);  
if(!isset($_GET["Page"]))  
{  
    $Page=1;  
}else{
    $Page = $_GET['Page'];
}


$Prev_Page = $Page-1;  
$Next_Page = $Page+1;  
$Page_Start = (($total_pagina*$Page)-$total_pagina);  
if($Num_Rows<=$total_pagina)  
{  
    $Num_Pages =1;  
}  
else if(($Num_Rows % $total_pagina)==0)  
{  
    $Num_Pages =($Num_Rows/$total_pagina) ;  
}  
else  
{  
    $Num_Pages =($Num_Rows/$total_pagina)+1;  
    $Num_Pages = (int)$Num_Pages;  
}  
$Page_End = $total_pagina * $Page;  
if ($Page_End > $Num_Rows)  
{  
    $Page_End = $Num_Rows;  
}  
$registros = oci_num_rows($stid);
$filas = "";
for($i=$Page_Start;$i<$Page_End;$i++)  
{  
     $filas .=  '
          <tr>
            <td><center><img src="images/aves/'.$row['IMAGEN'][$i].'" style="    width: 30%;" class="img-rounded"></center></td>
            <td class="text-center"><center>'.$row['NOMBRE'][$i].'</center></td>
            <td><center>'.$row['ESPECIE'][$i].'</center></td>
            <td><center>'.$row['COLOR'][$i].'</center></td>
            <td><center>'.$row['TIPO'][$i].'</center></td>
            <td><center>'.$row['TAMANO'][$i].'CM</center></td>
            <td><center>
                  <a href="?pag=admin/ave&edit=1&id='.$row['ID_AVE'][$i].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


$stid = oci_parse($conn, 'select * from table(get_color())');
oci_execute($stid);
$colores = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $colores .=  '<option value="'.$row['ID_COLOR'].'">'.$row['NOMBRE'].'</option>';
}


$stid = oci_parse($conn, 'select * from table(get_tipo())');
oci_execute($stid);
$tipos = "";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $tipos .=  '<option value="'.$row['ID_TIPO'].'">'.$row['NOMBRE'].'</option>';
}


if(isset($_GET['edit'])) {
    $stid = oci_parse($conn, "select * from table(PCK_CANTON.CANTON_GENERAL) ");
    oci_execute($stid);
    $ubicaciones =  '';
    $tot = 0;
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
		$stid4 = oci_parse($conn, 'BEGIN :r := PCK_UBICACIONES.TOTAL_UBICACION('.$row['ID_CANTON'].', '.$_GET['id'].'  ); END;');
		oci_bind_by_name($stid4, ':r', $tot, 40);
		oci_execute($stid4);
        if ($tot != 0){
            $ubicaciones .=  '<option value="'.$row['ID_CANTON'].'" selected>'.$row['UBICACION'].'</option>';
        }else{
            $ubicaciones .=  '<option value="'.$row['ID_CANTON'].'" >'.$row['UBICACION'].'</option>';
        } 
    }
}
?>