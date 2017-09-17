        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Ficha Tecnica</h2></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Animal Details Area Start Here -->
        <div class="animal-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="animal-content">
                            <div class="statas">
                                <h1>Status</h1>
                                <ul class="statas-list">
                                    <li>Avistada</li>
                                    <li>Estable</li>
                                    <li>En peligro</li>
                                </ul>
 
                            </div>
                            <div class="statas-content">
                                <h1>Datos tecnicos:</h1>
                                <ul>
                                    <li>Clase: <a href="#">Adopt Me</a> </li><br><br>
                                    <li>Orden: <a href="#">Adopt Me</a> </li><br><br>
                                    <li>SubOrden: <a href="#">Adopt Me</a> </li><br><br>
                                    <li>Familia: <a href="#">Adopt Me</a> </li><br><br>
                                    <li>Genero: <a href="#">Adopt Me</a> </li><br><br>
                                    <li>Especie: <a href="#">Adopt Me</a> </li>        
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="animal-image">
                            <div class="image">
                                <img src="images/single-animal.png" alt="">
                                <div class="image-content">
                                  <h1>Nombre del ave</h1>
                                  <h2>Nombre cientifico</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <br><br><hr><h2 class="titulo">Mapa de Avistamientos</h2>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="map"></div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <br><br><hr><h2 class="titulo">Fotografias de Avistamientos</h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:3%;">
                                <?php 
                                for ($x =0; $x<6;$x++){
                                    echo '
                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                                             <center>
                                             <span class="label label-success">Usuario</span>
                                              <span class="label label-success"> <span class="fa fa-heart" aria-hidden="true"></span> ##</span>
                                              <div class="btn-toolbar demoPadder" role="toolbar">
                                                <button type="button" class="btn btn-default">
                                                  <span class="fa fa-heart" aria-hidden="true"></span>Me gusta</button>
                                                </div>
                                             </center>
                                        </div>   
                                    '; }?>        
                    </div>
                    <hr>
                    
                    

                    
                    
                    
                    
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom:8,
          center: {lat: 9.6620154, lng: -83.891521}
        });
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';


        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: -31.563910, lng: 147.154312},
        {lat: -33.718234, lng: 150.363181},
        {lat: -33.727111, lng: 150.371124},
        {lat: -33.848588, lng: 151.209834},
        {lat: -33.851702, lng: 151.216968},
        {lat: -34.671264, lng: 150.863657},
        {lat: -35.304724, lng: 148.662905},
        {lat: -36.817685, lng: 175.699196},
        {lat: -36.828611, lng: 175.790222},
        {lat: -37.750000, lng: 145.116667},
        {lat: -37.759859, lng: 145.128708},
        {lat: -37.765015, lng: 145.133858},
        {lat: -37.770104, lng: 145.143299},
        {lat: -37.773700, lng: 145.145187},
        {lat: -37.774785, lng: 145.137978},
        {lat: -37.819616, lng: 144.968119},
        {lat: -38.330766, lng: 144.695692},
        {lat: -39.927193, lng: 175.053218},
        {lat: -41.330162, lng: 174.865694},
        {lat: -42.734358, lng: 147.439506},
        {lat: -42.734358, lng: 147.501315},
        {lat: -42.735258, lng: 147.438000},
        {lat: -43.999792, lng: 170.463352}
      ]
    </script>
         <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqHd142DIknn374Y48LxrttUsgde0g0Q&callback=initMap"> </script>

                    
                    
                </div>
            </div>
        </div>
  
    