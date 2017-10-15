<?php 
##################################################################
# 
# OBJETIVO:
# =========
#
# Mapa de avistamientos
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
    $url_base = "?pag=".$_GET['pag']."";
    $where = "";
    if(isset($_GET['clase'])){
         $url_base .= "&clase=".$_GET['clase']."";
         $where .= "WHERE id_clase = ".$_GET['clase']." " ;
    }
    if(isset($_GET['orden'])){
         $url_base .= "&orden=".$_GET['orden']."";
         $where .= "and id_orden = ".$_GET['orden']." " ;
    }
    if(isset($_GET['suborden'])){
         $url_base .= "&suborden=".$_GET['suborden']."";
        $where .= "and id_suborden = ".$_GET['suborden']." " ;
    }
    if(isset($_GET['familia'])){

         $url_base .= "&familia=".$_GET['familia']."";
        $where .= "and id_familia = ".$_GET['familia']." " ;
    }
    if(isset($_GET['genero'])){     
         $url_base .= "&genero=".$_GET['genero']."";
        $where .= "and id_genero = ".$_GET['genero']." " ;
    }
    if(isset($_GET['especie'])){
         $url_base .= "&especie=".$_GET['especie']."";
         $where .= "and id_especie = ".$_GET['especie']." " ;
    }
    if(isset($_GET['min'])){
         $url_base .= "&min=".$_GET['min']."";


    }

    if(isset($_GET['max'])){
         if(isset($_GET['clase'])){
            $where .= "and " ;
        }else{
              $where .= "WHERE " ;
         }
         $url_base .= "&max=".$_GET['max']."";

         $where .= "tamano between ".$_GET['min']." and ".$_GET['max']."  " ;
    }

?>