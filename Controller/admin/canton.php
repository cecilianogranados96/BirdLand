<?php 
##################################################################
# 
# OBJETIVO:
# =========
#
# Mantenimiento de cantones
#
# Desarrollo:
# 
# - JOSE ANDRES CECILIANO GRANADOS
#
# Mejoras:
# 
# - SILVIA CALDERON NAVARRO
#
###################################################################
    if(isset($_GET['borrar'])) {
        $stid = oci_parse($conn, 'BEGIN pck_canton.delete_canton('.$_GET['borrar'].'); END;');
        $r = oci_execute($stid);
        if (!$r) {
            $mensaje = ' <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Error: este dato forma parte de otros catálogos</center></h2>
               </div>';    

        }else{
            $mensaje = ' <div class="alert alert-danger"> 
                <h2 class="titulo"><br><center>Borrado con éxito</center></h2>
               </div>';        
        }
    }

    if(isset($_GET['nuevo'])) {
        $stid = oci_parse($conn, "BEGIN pck_canton.insert_canton('".$_POST['nombre']."','".$_POST['provincia']."'); END;");
        oci_execute($stid);
        $mensaje = ' 
                <div class="alert alert-success"> 
                    <h2 class="titulo"><br><center>Insertado con éxito</center></h2>
               </div>';
    }

    if(isset($_GET['editar'])) {
        $stid = oci_parse($conn, "BEGIN pck_canton.update_canton(".$_GET['id'].",'".$_POST['nombre']."',".$_POST['provincia']."); END;");
        oci_execute($stid);
        $mensaje = '
                <div class="alert alert-success"> 
                    <h2 class="titulo"><br><center>Actualizado con éxito</center></h2>
               </div>';
    }

    if(isset($_GET['edit'])) {    
        error_reporting(0);
        $stid = oci_parse($conn, "begin :r := pck_canton.canton_nombre(".$_GET['id']."); end;");
        oci_bind_by_name($stid, ':r', $nombre, 40);
        oci_execute($stid);

        $stid = oci_parse($conn, "begin :r := pck_canton.provincia_id(".$_GET['id']."); end;");
        oci_bind_by_name($stid, ':r', $id_provincia, 40);
        oci_execute($stid);

        $stid = oci_parse($conn, "begin :r := pck_provincia.provincia_nombre(".$id_provincia."); end;");
        oci_bind_by_name($stid, ':r', $nombre_provincia, 40);
        oci_execute($stid);

    }



    $stid = oci_parse($conn, 'select * from table(PCK_CANTON.CANTON_PROVINCIA)');

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
                <td><center>
                    '.$row['NOMBRE'][$i].'
                </td>
                <td><center>'.$row['PROVINCIA'][$i].'</td>
                <td><center>
                      <a href="?pag=admin/canton&edit=1&id='.$row['ID_CANTON'][$i].'" class="btn  btn-success">Editar</button>
                </td>
              </tr>';
    }

    $stid = oci_parse($conn, 'select * from table (get_provincia)');
    oci_execute($stid);
    $opciones = "";
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
       $opciones .=  '<option value="'.$row['ID_PROVINCIA'].'">'.$row['NOMBRE'].'</option>';
    }

?>