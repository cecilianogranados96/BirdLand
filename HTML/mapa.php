
        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Mapa de avistamientos</h2></center>
                    </div>
                </div>
            </div>
        </div>

<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
var marker;

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 9.6620154, lng: -83.891521}
  });

    <?php                
        $stid = oci_parse($conn, " select * from avistamiento inner join ave on avistamiento.ID_AVE = ave.ID_AVE");
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            echo '  
            marker = new google.maps.Marker({
                map: map,
                position: {lat: '.$row['LATITUD'].', lng: '.$row['LONGITUD'].'},
                label: "'.$row['NOMBRE_COMUN'].'"
              });';
        }
    ?> 
}
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqHd142DIknn374Y48LxrttUsgde0g0Q&callback=initMap">
    </script>
  </body>
</html>


       <div class="remember-area faq-area">
                <div class="row">
                        <div class="faq-area">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                  <div class="panel-body"> 
                                      <form class="form-horizontal">
                                        <fieldset>
                                        <legend>Filtro</legend>


                                       

                                    <?php 
                                    
                                    $url_base = "?pag=".$_GET['pag']."";
                                    
                                    if(isset($_GET['clase'])){
                                         $url_base .= "&clase=".$_GET['clase']."";
                                    }
                                    if(isset($_GET['orden'])){
                                         $url_base .= "&orden=".$_GET['orden']."";
                                    }
                                    if(isset($_GET['suborden'])){
                                         $url_base .= "&suborden=".$_GET['suborden']."";
                                    }
                                    if(isset($_GET['familia'])){
                                         
                                         $url_base .= "&familia=".$_GET['familia']."";
                                     }
                                    if(isset($_GET['genero'])){     
                                         $url_base .= "&genero=".$_GET['genero']."";
                                     }
                                      if(isset($_GET['especie'])){
                                         $url_base .= "&especie=".$_GET['especie']."";
                                     }
                                  
                                    
                                    ?>
                                    
                                     <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Clase</label>  
                                          <div class="col-md-4">
                                         
                                    
                                    <select class="form-control" onchange="window.location.href='<?php echo $url_base; ?>&clase='+this.value+'#map'">
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                        $stid = oci_parse($conn, 'select * from clase order by nombre');
                                        oci_execute($stid);
                                        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                            if(isset($_GET['clase'])){
                                                if ($_GET['clase'] == $row['ID_CLASE']){
                                                    $select = "selected";
                                                }else{
                                                    $select = ""; 
                                                }
                                            }else{
                                                 $select = ""; 
                                            }
                                            echo '<option value="'.$row['ID_CLASE'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                        }
                                    ?>
                                    </select>
            </div>
                                        </div>
                                          
                                             <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Orden</label>  
                                          <div class="col-md-4">
                                          
                               
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&orden='+this.value+'#map'" class="form-control" <?php if(!isset($_GET['clase'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                         if(isset($_GET['clase'])){
                                            $stid = oci_parse($conn, 'select * from orden where id_clase = '.$_GET['clase'].' order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                if(isset($_GET['orden'])){
                                                    if ($_GET['orden'] == $row['ID_ORDEN']){
                                                        $select = "selected";
                                                    }else{
                                                        $select = ""; 
                                                    }
                                                }else{
                                                     $select = ""; 
                                                }
                                                echo '<option value="'.$row['ID_ORDEN'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                            }
                                         }
                                    ?>
                                    </select>
                                           </div>
                                        </div>       
                                                  <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">SubOrden</label>  
                                          <div class="col-md-4">
                                         
                         
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&suborden='+this.value+'#map'" class="form-control" <?php if(!isset($_GET['orden'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                         if(isset($_GET['orden'])){
                                            $stid = oci_parse($conn, 'select * from suborden where id_orden = '.$_GET['orden'].' order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                if(isset($_GET['suborden'])){
                                                    if ($_GET['suborden'] == $row['ID_SUBORDEN']){
                                                        $select = "selected";
                                                    }else{
                                                        $select = ""; 
                                                    }
                                                }else{
                                                     $select = ""; 
                                                }
                                                echo '<option value="'.$row['ID_SUBORDEN'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                            }
                                         }
                                    ?>
                                    </select>    </div>
                                        </div>
                                              
                                                  <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Familia</label>  
                                          <div class="col-md-4">
                          
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&familia='+this.value+'#map'" class="form-control" <?php if(!isset($_GET['suborden'])) {echo "disabled"; }?> >
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                         if(isset($_GET['suborden'])){
                                            $stid = oci_parse($conn, 'select * from familia where id_suborden = '.$_GET['suborden'].' order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                if(isset($_GET['familia'])){
                                                    if ($_GET['familia'] == $row['ID_FAMILIA']){
                                                        $select = "selected";
                                                    }else{
                                                        $select = ""; 
                                                    }
                                                }else{
                                                     $select = ""; 
                                                }
                                                echo '<option value="'.$row['ID_FAMILIA'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                            }
                                         }
                                    ?>
                                    </select>    </div>
                                        </div>
                                              
                                              
                                                  <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Genero</label>  
                                          <div class="col-md-4">
                                         
                              
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&genero='+this.value+'#map'" class="form-control" <?php if(!isset($_GET['familia'])) {echo "disabled"; }?> >
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                         if(isset($_GET['familia'])){
                                            $stid = oci_parse($conn, 'select * from genero where id_familia = '.$_GET['familia'].' order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                if(isset($_GET['genero'])){
                                                    if ($_GET['genero'] == $row['ID_GENERO']){
                                                        $select = "selected";
                                                    }else{
                                                        $select = ""; 
                                                    }
                                                }else{
                                                     $select = ""; 
                                                }
                                                echo '<option value="'.$row['ID_GENERO'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                            }
                                         }
                                    ?>
                                    </select>    </div>
                                        </div>
                                    
                                              
                                                  <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Especie</label>  
                                          <div class="col-md-4">
                                     
                                      <select onchange="window.location.href='<?php echo $url_base; ?>&especie='+this.value+'#map'" class="form-control" <?php if(!isset($_GET['genero'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Selecciona una opcion</option>';  
                                         if(isset($_GET['genero'])){
                                            $stid = oci_parse($conn, 'select * from especie where id_genero = '.$_GET['genero'].' order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                if(isset($_GET['especie'])){
                                                    if ($_GET['especie'] == $row['ID_ESPECIE']){
                                                        $select = "selected";
                                                    }else{
                                                        $select = ""; 
                                                    }
                                                }else{
                                                     $select = ""; 
                                                }
                                                echo '<option value="'.$row['ID_ESPECIE'].'" '.$select.'> '.$row['NOMBRE'].'</option>';
                                            }
                                         }
                                    ?>
                                    </select>    </div>
                                        </div>
                                                

                                        <div class="form-group">
                                            <center>
                                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Filtrar</button>
                                            </center>
                                        </div>
</div>
                                        </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>      