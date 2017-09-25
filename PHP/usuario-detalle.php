<?php

$consul = 'select * from persona inner join usuario on usuario.id_persona = persona.id_persona and persona.id_persona = '.$_SESSION['id_persona'].' ';
$stid = oci_parse($conn, $consul);
oci_execute($stid);
$persona = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);




?>