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

session_start();

$conn = oci_connect('BL', 'BL123', 'BirdLand');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$login = '';
if(!isset($_SESSION['id_persona'])) { 
    $login .= '  <li class="schedule"><a href="?pag=login">
        <i class="fa fa-sign-in" aria-hidden="true"></i> Login
    </a></li>';
}else{

    $stid = oci_parse($conn, "begin :r := pck_persona.obtener_nombre(".$_SESSION['id_persona']."); end;");
    oci_bind_by_name($stid, ':r', $nombre_largo, 40);
    oci_execute($stid);
    $nombre = explode(" ", $nombre_largo);

    $login .= '

        <li class="schedule"><a href="?pag=nuevo-avistamiento">
            <i class="fa fa-sign-in" aria-hidden="true"></i> NUEVO
        </a></li>
        <li class="schedule"><a href="?pag=salir">
            <i class="fa fa-sign-in" aria-hidden="true"></i> Salir: '.$nombre[0].'
        </a></li>';

}


?>                             