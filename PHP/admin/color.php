<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_color.delete_color('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con éxito</center></h2>
           </div>';
}

if(isset($_GET['nuevo'])) {
    $stid = oci_parse($conn, "BEGIN pck_color.insert_color('".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Insertado con éxito</center></h2>
           </div>';
}

if(isset($_GET['editar'])) {
    $stid = oci_parse($conn, "BEGIN pck_color.update_color('".$_GET['id']."','".$_POST['nombre']."'); END;");
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-success"> 
            <h2 class="titulo"><br><center>Actualizado con éxito</center></h2>
           </div>';
}

if(isset($_GET['edit'])) {     
    error_reporting(0);
    $stid = oci_parse($conn, "begin :r := pck_color.color_nombre(".$_GET['id']."); end;");
    oci_bind_by_name($stid, ':r', $nombre, 40);
    oci_execute($stid);
}

$stid = oci_parse($conn, 'select * from table(get_color)');
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

           $filas .=  '<tr>
            <td><center>
                '.utf8_encode($row['NOMBRE'][$i]).'
            </td>
            <!--<td><center>CLASE</td> -->
            <td><center>
                  <a href="?pag=admin/color&edit=1&id='.$row['ID_COLOR'][$i].'" class="btn  btn-success">Editar</button>
            </td>
          </tr>';
}


?>