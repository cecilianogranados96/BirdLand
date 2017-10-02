<?php

if (isset($_SESSION['id_persona'])){
    $persona2 = $_SESSION['id_persona'];
}else{
    $persona2 = $_GET['id'];
}
    

$consul = 'select * from table(pck_persona.persona_usuario('.$persona2.'))';
$stid = oci_parse($conn, $consul);
oci_execute($stid);
$persona = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);


/*$stid = oci_parse($conn, "select COUNT(*) total from avistamiento where ID_PERSONA = ".$persona2." ");
oci_execute($stid);
$total = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
 */
 
$stid = oci_parse($conn, 'BEGIN :r := PCK_AVISTAMIENTO.TOTAL_AVISTAMIENTO_PERSONA('.$persona2.'); END;');
oci_bind_by_name($stid, ':r', $total, 40);
oci_execute($stid);


?>