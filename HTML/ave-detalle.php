<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Ficha Técnica</h2>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="animal-details">
    <div class="container">
        <div class="row">
            <center> <i> <h2><?php echo $ave['NOMBRE_CIENTIFICO']; ?></h2></i></center>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="animal-content">
                   
                    <div class="statas">
                        <h1>Datos generales</h1>
                        <ul class="statas-list">
                            <li>
                                <?php echo utf8_encode($ave['NOMBRE_COMUN']); ?>
                            </li>
                            <li><i><?php echo $ave['NOMBRE_CIENTIFICO']; ?></i></li>

                        </ul>
                    </div>
                    <div class="statas">
                        <h1>Datos técnicos</h1>
                        <ul class="statas-list">
                            <li>Clase:
                                <?php echo $ave['CLASE']; ?>
                            </li>
                            <li>Orden:
                                <?php echo $ave['ORDEN']; ?>
                            </li><br><br>
                            <li>Suborden:
                                <?php echo $ave['SUBORDEN']; ?>
                            </li>
                            <li>Familia:
                                <?php echo $ave['FAMILIA']; ?>
                            </li><br><br>
                            <li>Género:
                                <?php echo $ave['GENERO']; ?>
                            </li>
                            <li>Especie:
                                <?php echo $ave['ESPECIE']; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="statas">
                        <h1>Avistamiento</h1>
                        <center>
                            <ul class="statas-list">
                                <li>
                                    <?php echo $ave['TIPO']; ?> </li>
                            </ul>
                        </center>
                    </div>
                    <div class="statas">
                        <h1>Ubicaciones</h1>
                        <center>
                            <ul class="statas-list">
                                <?php echo $locaciones; ?>
                            </ul>
                        </center>
                    </div>



                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="animal-image">
                    <div class="image"><center>
                        <img src="images/aves/<?php echo $ave['IMAGEN']; ?>" style="    width: 75%;
                                                                                    margin-top: 20%;"></center>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <br><br>
                <hr>
                <h2 class="titulo">Mapa de Avistamientos</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="map"></div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <br><br>
                <hr>
                <h2 class="titulo">Fotografías de Avistamientos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:3%;">

                <?php 

				
$stid1 = oci_parse($conn, "
select avistamiento.foto,avistamiento.id_ave,persona.nombre,persona.apellido,avistamiento.id_avistamiento,avistamiento.id_persona from avistamiento INNER JOIN persona on avistamiento.ID_PERSONA = persona.ID_PERSONA where id_ave = ".$_GET['id']." ");
oci_execute($stid1);
        
while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    if (isset($_SESSION['id_persona'])){
        $stid = oci_parse($conn, "select count(*) total from puntaje where id_avistamiento = ".$row['ID_AVISTAMIENTO']." and id_persona = ".$_SESSION['id_persona']." ");
        oci_execute($stid);
        $total = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
    }

    $stid = oci_parse($conn, "select count(*) puntos from puntaje where id_avistamiento = ".$row['ID_AVISTAMIENTO']." ");
    oci_execute($stid);
    $puntos = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
    if (isset($_SESSION['id_persona'])){
        if ($total['TOTAL'] >= 1){
            $datos = 'class="btn btn-danger" onclick="votar('.$_SESSION['id_persona'].','.$row['ID_AVISTAMIENTO'].',this,2);"';
            $label = '<span class="fa fa-heart" aria-hidden="true"></span> NO GUSTA';
        }else{
            $datos = 'class="btn btn-default" onclick="votar('.$_SESSION['id_persona'].','.$row['ID_AVISTAMIENTO'].',this,1);" ';
            $label = '<span class="fa fa-heart" aria-hidden="true"></span> ME GUSTA';
        }
    }
    echo '
                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                            <img src="images/avistamientos/'.$row['FOTO'].'" class="img-responsive img-thumbnail">
                                             <center>
                                             <span class="label label-success">'.$row['NOMBRE'].' '.$row['APELLIDO'].' </span><br><br>
                                              <span class="label label-success" style="font-size: 120%;"> 
                                                <span class="fa fa-heart" aria-hidden="true" > '.$puntos['PUNTOS'].'</span> </span>
                                              <div class="btn-toolbar demoPadder" role="toolbar">';
                                                if (isset($_SESSION['id_persona'])){
                                                    echo '<button type="button" id="#p'.$row['ID_AVISTAMIENTO'].'" '.$datos.' >'.$label.'</button>';
                                                }
                                        echo '</div>
                                             </center>
                                        </div>'; 
    
} ?>
            </div>
            <hr>
            <script>
                function votar(ppersona, pavistamiento, id, ptipo) {
                    $.post("?pag=registrar_voto", {
                        persona: ppersona,
                        avistamiento: pavistamiento,
                        tipo: ptipo
                    });
                    if (ptipo == 1) {
                        $(id).removeClass("btn-default");
                        $(id).addClass("btn-danger");
                        $(id).attr("onclick", "votar(" + ppersona + "," + pavistamiento + ",this,2);");
                        $(id).html('<span class="fa fa-heart" aria-hidden="true"></span> NO GUSTA');
                        
                    } else {
                        $(id).removeClass("btn-danger");
                        $(id).addClass("btn-default");
                        $(id).attr("onclick", "votar(" + ppersona + "," + pavistamiento + ",this,1);");
                        $(id).html('<span class="fa fa-heart" aria-hidden="true"></span> ME GUSTA');
                    }
                }

            </script>
            <script>
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 8,
                        center: {
                            lat: 9.6620154,
                            lng: -83.891521
                        }
                    });
                    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    var markers = locations.map(function(location, i) {
                        return new google.maps.Marker({
                            position: location,
                            label: labels[i % labels.length]
                        });
                    });

                    // Add a marker clusterer to manage the markers.
                    var markerCluster = new MarkerClusterer(map, markers, {
                        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
                    });
                }
                var locations = [
                    <?php echo $ubicaciones; ?> {
                        lat: 0,
                        lng: 0
                    }
                ]

            </script>
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqHd142DIknn374Y48LxrttUsgde0g0Q&callback=initMap">


            </script>
        </div>
    </div>
</div>
