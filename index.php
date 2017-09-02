<?php 
    include "PHP/header.php";
    include "HTML/header.php";
    if(isset($_GET['pag'])){
        if (file_exists("PHP/".$_GET['pag'].".php")) {
           include "PHP/".$_GET['pag'].".php";
        }
        if (file_exists("HTML/".$_GET['pag'].".php")) {
           include "HTML/".$_GET['pag'].".php";
        }else{
            include "HTML/inicio.php";
        }  
    }else{
        include "HTML/inicio.php";    
    }
    include "HTML/fotter.php";
?>
