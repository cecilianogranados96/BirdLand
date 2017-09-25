<?php




if (!isset($_SESSION['id_persona'])){
    $persona2 = $_GET['id'];
}else{
    $persona2 = $_SESSION['id_persona'];
}
    

$consul = 'select * from persona inner join usuario on usuario.id_persona = persona.id_persona and persona.id_persona = '.$persona2.' ';
$stid = oci_parse($conn, $consul);
oci_execute($stid);
$persona = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);


$stid = oci_parse($conn, "select COUNT(*) total from avistamiento where ID_PERSONA = ".$persona2." ");
oci_execute($stid);
$total = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
    


?>