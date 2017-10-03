<?php

$stid1 = oci_parse($conn, "select * from table(PCK_AVE.AVE_GENERAL(".$_GET['id']."))");
oci_execute($stid1);
$ave = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS);



$stid2 = oci_parse($conn, "select * from table(PCK_avistamiento.avistamiento_ave(".$_GET['id']."))");
oci_execute($stid2);
$ubicaciones ="";
while ($row = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
  $ubicaciones .=  '{lat: '.$row['LATITUD'].', lng: '.$row['LONGITUD'].'},';
}

          
$stid = oci_parse($conn, "select * from table(PCK_ubicaciones.ubicacion_canton(".$_GET['id']."))");
oci_execute($stid);
$locaciones ="";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
  $locaciones .=  ' <li>'.$row['UBICACION'].'</li>';
}
?>