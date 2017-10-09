<?php

##################################################################
# 
# OBJETIVO:
# =========
#
# Configuracion y datos basicos generales
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
    session_start();
    $conn = oci_connect('BL', 'BL123', 'Proyecto');
    if (!$conn) {
        echo "ERROR EN LA CONECCION; <div style='display:none;'>";
    }
    $stid1 = oci_parse($conn, "select * from table(PCK_parametro.parametro_id(6))");
    oci_execute($stid1);
    $total_pagina = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)['DESCRIPCION'];
    $array = ["Inicio:index","Mapa:mapa", "Aves:aves","Usuarios:usuarios","Estadísticas:estadisticas"];
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
    $login = '';
    if(!isset($_SESSION['id_persona'])) { 
        $login .= '  <li class="schedule"><a href="?pag=login">
            <i class="fa fa-sign-in" aria-hidden="true"></i>Sesión
        </a></li>';
    }else{
        $stid = oci_parse($conn, "begin :r := pck_persona.obtener_nombre(".$_SESSION['id_persona']."); end;");
        oci_bind_by_name($stid, ':r', $nombre_largo, 40);
        oci_execute($stid);
        $nombre = explode(" ", $nombre_largo);
        $login .= '
            <li class="schedule"><a href="?pag=nuevo-avistamiento">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Nuevo
            </a></li>
                 <li class="schedule"><a href="?pag=usuario-detalle">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Perfil
            </a></li>
           ';
    }

?>                             