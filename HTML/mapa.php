
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


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="textinput" type="text" placeholder="Nombre del ave" class="form-control input-md">
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="selectbasic">Clase</label>
                                          <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Option one</option>
                                              <option value="2">Option two</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="selectbasic">Orden</label>
                                          <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Option one</option>
                                              <option value="2">Option two</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="selectbasic">SubOrden</label>
                                          <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Option one</option>
                                              <option value="2">Option two</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="selectbasic">Genero</label>
                                          <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Option one</option>
                                              <option value="2">Option two</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="selectbasic">Especie</label>
                                          <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Option one</option>
                                              <option value="2">Option two</option>
                                            </select>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                            <center>
                                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Filtrar</button>
                                            </center>
                                        </div>

                                        </fieldset>
                                        </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>      