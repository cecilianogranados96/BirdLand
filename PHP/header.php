<?php

//#################### Escribe menu ################################
$array = ["Inicio:index","Mapa:mapa", "Aves:aves","Usuarios:usuarios","Estadisticas:estadisticas", "Contacto:contacto"];
$menu  = "";
foreach ($array as $i => $value) {    
    $pag = explode(":", $array[$i]); 
    $activo = "";

    if(isset($_GET['pag'])){
        if ($_GET['pag'] == $pag[1]){
            $activo = 'class="active"';
        }
     }else{
        $activo = "";
        if ($pag[1] == "index"){
          $activo = 'class="active"';
        }
     }    
    $menu .= "<li ".$activo."><a href='?pag=".$pag[1]."'>".$pag[0]."</a></li>";
}


?>                             