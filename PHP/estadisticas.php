<?php

$stid1 = oci_parse($conn, "select count(*) total from canton");
oci_execute($stid1);
$ubicaciones = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];


$stid2 = oci_parse($conn, "select count(*) total from avistamiento");
oci_execute($stid2);
$avistamientos = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];


$stid3 = oci_parse($conn, "select count(*) total from ave");
oci_execute($stid3);
$aves = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];


$stid4 = oci_parse($conn, "select count(*) total from persona");
oci_execute($stid4);
$usuarios = oci_fetch_array($stid4, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];


$stid5 = oci_parse($conn, "select count(*) total from especie");
oci_execute($stid5);
$especies = oci_fetch_array($stid5, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];


$stid6 = oci_parse($conn, "select count(*) total from puntaje");
oci_execute($stid6);
$likes = oci_fetch_array($stid6, OCI_ASSOC+OCI_RETURN_NULLS)['TOTAL'];

setlocale(LC_TIME, 'es_ES.UTF-8');
date_default_timezone_set('America/Costa_Rica'); 
setlocale(LC_TIME, 'es_ES.UTF-8');
$fecha = strftime("%d de %B del %Y %H:%M");

?>