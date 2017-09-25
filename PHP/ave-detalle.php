<?php

$stid = oci_parse($conn, "
select ave.id_ave,ave.nombre_comun,genero.nombre ||' ' || especie.nombre nombre_cientifico, genero.nombre genero, especie.nombre especie, familia.nombre familia,
suborden.nombre suborden, orden.nombre orden,clase.nombre clase, tipo.nombre tipo,ave.imagen
from ave 
inner join especie on ave.id_especie = especie.id_especie
inner join genero on especie.id_genero = genero.id_genero
inner join familia on genero.id_familia = familia.id_familia
inner join suborden on familia.id_suborden = suborden.id_suborden
inner join orden on suborden.id_orden = orden.id_orden
inner join clase on orden.id_clase = clase.id_clase 
inner join tipo on ave.id_estado = tipo.id_tipo
where ave.id_ave = ".$_GET['id']." ");
oci_execute($stid);
$ave = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);




$stid = oci_parse($conn, "select * from avistamiento where id_ave = ".$_GET['id']." ");
oci_execute($stid);
$ubicaciones ="";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
  $ubicaciones .=  '{lat: '.$row['LATITUD'].', lng: '.$row['LONGITUD'].'},';
}
          
$stid = oci_parse($conn, "select pais.nombre || ' ' || canton.nombre ubicacion, canton.id_canton from ubicacion 
inner join canton on ubicacion.id_canton = canton.id_canton 
inner join provincia on canton.id_provincia = provincia.id_provincia
inner join pais on pais.id_pais = provincia.id_pais where ubicacion.id_ave = ".$_GET['id']."
order by provincia.nombre,canton.nombre ASC  ");
oci_execute($stid);
$locaciones ="";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
  $locaciones .=  ' <li>'.$row['UBICACION'].'</li>';
}

    
    
     
          
    
    
       

?>