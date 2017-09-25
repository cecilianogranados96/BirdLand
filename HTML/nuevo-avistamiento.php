        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Nuevo Avistamiento</h2></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="animal-details">
            <div class="container">
                <div class="row">
                    <?php if (isset($mensaje)) {echo $mensaje;} ?>
                    <center>
                            <form action="?pag=<?php echo $_GET['pag']; ?>&nuevo=1" method="post" enctype="multipart/form-data" >
                                <table class="table">
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>1- Seleccione el ave</h2></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                            <select id="ave" name="ave" class="form-control"  style="width: 35%;">
                                                <option>Selecciona una opcion</option>
                                                <?php
                                                echo $aves;
                                                ?>
                                            </select>
                                            </center>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>2- Sube una imagen</h2></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="file" class="form-control" name="foto" style="width: 35%;" required>
                                            </center>
                                        </td>
                                    </tr>
                                    
                                    
                                    <td colspan="3" class="titulo">
                                        <center><h2>3- Mueva la posicion</h2></center>
                                    </td>
                                    </table>
                                    <div id="map" style="height: 80%;"></div> 
                                    <input type="text" id="LAT" name="lat" hidden/>
                                    <input type="text" id="LON" name="lon" hidden/>
                                <br>
                                
                  
                                
                        <br><br>
                                
                                
                                 <center>
                                        <button type="submit" class="btn btn-lg btn-success">Enviar</button>               
                                </center>
                                 
                            </form>
                        </center>
                    
                    
                </div>
            </div>
        </div>


<script>


var marker;         
var coords = {};  

//Funcion principal
initMap = function () 
{

            coords =  {lat: 9.6620154, lng: -83.891521}; 
            setMapa(coords); 
            document.getElementById("LAT").value = coords.lat;
            document.getElementById("LON").value = coords.lng;
}
function setMapa (coords)
{   
    
      var map = new google.maps.Map(document.getElementById('map'),
      {
        zoom: 10,
        center:new google.maps.LatLng(coords.lat,coords.lng),

      });
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coords.lat,coords.lng),

      });
      marker.addListener('click', toggleBounce);
      
      marker.addListener( 'dragend', function (event)
      {
            document.getElementById("LAT").value = this.getPosition().lat();
            document.getElementById("LON").value = this.getPosition().lng();
      });
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

    </script>



    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqHd142DIknn374Y48LxrttUsgde0g0Q&callback=initMap">
    </script>


  