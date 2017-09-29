<?php 

if (isset($_POST['busqueda'])){
    $extra = "and especie.nombre LIKE '%".$_POST['busqueda']."%'
    or color.nombre LIKE '%".$_POST['busqueda']."%'
    or ave.tamano LIKE '%".$_POST['busqueda']."%'
    or ave.nombre_comun LIKE '%".$_POST['busqueda']."%' ";    
}else{
    $extra = "";
}

$stid = oci_parse($conn, '
select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo, ave.tamano, ave.imagen from ave 
inner join especie on ave.id_especie = especie.id_especie
inner join tipo on ave.id_estado = tipo.id_tipo
inner join color on ave.id_color = color.id_color and ave.id_estado = 1 '.$extra.'');

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
            <td><center><span class="label btn-xs label-danger">'.$row['TIPO'][$i].'</span></center></td>
            <td><center>'.$row['TAMANO'][$i].'CM</center></td>
            <td><center>
                  <a href="?pag=ave-detalle&id='.$row['ID_AVE'][$i].'" class="btn  btn-success">Ficha</button>
            </td>
          </tr>';
}


?>