<?php
if(isset($_GET['borrar'])) {
    $stid = oci_parse($conn, 'BEGIN pck_clase.delete_clase('.$_GET['borrar'].'); END;');
    oci_execute($stid);
    $mensaje = ' <div class="alert alert-danger"> 
            <h2 class="titulo"><br><center>Borrado con éxito</center></h2>
           </div>';
}
//?
if(!isset($_GET['bitacora'])) { 
    
    if (isset($_POST['busqueda'])){
    $extra = "where persona.nombre LIKE '%".$_POST['busqueda']."%'
    or persona.apellido LIKE '%".$_POST['busqueda']."%'
    or persona.email LIKE '%".$_POST['busqueda']."%'";    
}else{
    $extra = "";
}
        
$stid = oci_parse($conn, 'select * from table(get_persona)'.$extra.' ');
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

       if ($row['TIPO'][$i] == 1) {$tipo = "ADMINISTRADOR";  }else{ $tipo = "USUARIO";}
       $filas .=  '<tr>
                <td><center>
                    '.$row['NOMBRE'][$i].' '.$row['APELLIDO'][$i].'
                </td>
                <td><center>
                    '.$row['EMAIL'][$i].'
                </td>
                <td><center>
                    '.$tipo.'
                </td>
                <!--<td><center>CLASE</td> -->
                <td><center>
                      <a href="?pag=editar_usuario&id='.$row['ID_PERSONA'][$i].'" class="btn  btn-success">Editar</button>
                </td>
                <td><center>
                      <a href="?pag=admin/usuarios&id='.$row['ID_PERSONA'][$i].'&bitacora=1" class="btn  btn-warning">Bitacora</button>
                </td>
              </tr>';
}
    

}


if(isset($_GET['bitacora'])) { 
    $stid = oci_parse($conn, 'select * from table(pck_persona.persona_bitacora('.$_GET['id'].')');
    oci_execute($stid);
    $filas = "";
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
       $filas .=  '<tr>
                <td><center>
                    '.$row['NOMBRE'].'
                </td>
                <td><center>
                    '.$row['ANTERIOR'].'
                </td>
                <td><center>
                    '.$row['SIGUIENTE'].'
                </td>
               
              </tr>';
    }
}
?>