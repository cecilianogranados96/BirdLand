<?php               
##################################################################
# 
# OBJETIVO:
# =========
#
# Reporte de aves 
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
    if(!isset($_GET["Page"]))  
    {  
        $Page=1;  
    }else{
        $Page = $_GET['Page'];
    }
    $url_base = "?pag=".$_GET['pag']."&Page=".$Page."";
    $where = "";
    if(isset($_GET['clase'])){
         $url_base .= "&clase=".$_GET['clase']."";
         $where .= "WHERE clase.id_clase = ".$_GET['clase']." " ;
    }
    if(isset($_GET['orden'])){
         $url_base .= "&orden=".$_GET['orden']."";
         $where .= "and orden.id_orden = ".$_GET['orden']." " ;
    }
    if(isset($_GET['suborden'])){
         $url_base .= "&suborden=".$_GET['suborden']."";
        $where .= "and suborden.id_suborden = ".$_GET['suborden']." " ;
    }
    if(isset($_GET['familia'])){

         $url_base .= "&familia=".$_GET['familia']."";
        $where .= "and familia.id_familia = ".$_GET['familia']." " ;
     }
    if(isset($_GET['genero'])){     
         $url_base .= "&genero=".$_GET['genero']."";
        $where .= "and genero.id_genero = ".$_GET['genero']." " ;
     }
      if(isset($_GET['especie'])){
         $url_base .= "&especie=".$_GET['especie']."";
         $where .= "and especie.id_especie = ".$_GET['especie']." " ;
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
         $where .= "ave.tamano between ".$_GET['min']." and ".$_GET['max']."  " ;
     }
?>