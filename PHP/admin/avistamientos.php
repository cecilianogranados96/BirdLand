<?php 

if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_clase.delete_clase('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con exito</center></h2>
           </div>';
}







if (isset($_POST['busqueda'])){
 $extra = "where ave.nombre_comun = '".$_POST['busqueda']."'
    or persona.nombre = '".$_POST['busqueda']."'
    or persona.apellido = '".$_POST['busqueda']."'
    or ave.nombre_comun = '".$_POST['busqueda']."' ";   
}else{
    $extra = "";
}

$stid = oci_parse($conn, '
select avistamiento.id_avistamiento,persona.nombre,ave.nombre_comun,avistamiento.foto from avistamiento 
inner join persona on avistamiento.id_persona = persona.id_persona
inner join ave on ave.id_ave = avistamiento.id_ave '.$extra.' ');



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
            <td><center><img src="images/avistamientos/'.$row['FOTO'][$i].'" style="width: 30%;" class="img-thumbnail"></center></td>
            <td><center>'.$row['NOMBRE_COMUN'][$i].'</center></td>
            <td><center>'.$row['NOMBRE'][$i].'</center></td>
            <td><center><a href="?pag=admin/avistamientos&id='.$row['ID_AVISTAMIENTO'][$i].'" class="btn  btn-danger">Eliminar</button></center></td>
        </tr>';
}



?>