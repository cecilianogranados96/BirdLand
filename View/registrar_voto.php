<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Registro de puntaje
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

    if ($_POST['tipo'] == 1) {
        $consul = 'begin pck_puntaje.insert_puntaje('.$_POST['persona'].','.$_POST['avistamiento'].'); end;';
        $stid = oci_parse($conn, $consul);
        oci_execute($stid);
    }else {
        $consul = 'begin pck_puntaje.delete_puntaje('.$_POST['persona'].','.$_POST['avistamiento'].'); end;';
        $stid = oci_parse($conn, $consul);
        oci_execute($stid);
    }

?>