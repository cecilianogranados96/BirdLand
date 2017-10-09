<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Estadisticas
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
    $stid1 = oci_parse($conn, 'BEGIN :r := PCK_CANTON.total_canton; END;');
    oci_bind_by_name($stid1, ':r', $ubicaciones, 40);
    oci_execute($stid1);

    $stid2 = oci_parse($conn, 'BEGIN :r := PCK_AVISTAMIENTO.total_avistamiento; END;');
    oci_bind_by_name($stid2, ':r', $avistamientos, 40);
    oci_execute($stid2);

    $stid3 = oci_parse($conn, 'BEGIN :r := PCK_AVE.total_ave; END;');
    oci_bind_by_name($stid3, ':r', $aves, 40);
    oci_execute($stid3);

    $stid4 = oci_parse($conn, 'BEGIN :r := PCK_PERSONA.total_persona; END;');
    oci_bind_by_name($stid4, ':r', $usuarios, 40);
    oci_execute($stid4);

    $stid5 = oci_parse($conn, 'BEGIN :r := PCK_especie.total_especie; END;');
    oci_bind_by_name($stid5, ':r', $especies, 40);
    oci_execute($stid5);

    $stid6 = oci_parse($conn, 'BEGIN :r := PCK_puntaje.total_puntaje; END;');
    oci_bind_by_name($stid6, ':r', $likes, 40);
    oci_execute($stid6);


    setlocale(LC_TIME, 'es_ES.UTF-8');
    date_default_timezone_set('America/Costa_Rica'); 
    setlocale(LC_TIME, 'es_ES.UTF-8');
    $fecha = strftime("%d de %B del %Y %H:%M");

?>