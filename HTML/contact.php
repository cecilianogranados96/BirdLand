
        <!-- Header End Here -->
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area three">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <h2>How to Get Here</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Where We Are Start Here -->
        <div class="where-we-area">
          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>Where We Are</h2>
                        <p><span>Zooks</span> is in central Barcelona in the Park of the Ciutadella. There are two access points: One through the Park of the Ciutadella and the other by Carrer Wellington.</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="map-area">
                  <div id="map" class="map-full" style="width:100%; height:390px;"></div>
                  <a href="#"><i class="fa fa-map"></i> Download Map</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-contact">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="images/map/6.png" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                        <p>219 Mesa Driving Las Vegas, <br/>NV 89104</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-contact">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="images/map/7.png" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Phone & Fax</h4>
                        <p>(012) 345 6789 <br/>(012) 555-6631</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-contact">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="images/map/8.png" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">GPS Coordinates</h4>
                        <p>32º 20 ' 11.52'' N , <br/>3º 21' 13.06 ''E</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Where We Are End Here -->
        <!-- Form Area Start Here -->
        <div class="contact-form">
          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contact">
                  <form>
                    <fieldset>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Your E-mail Address">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Subject">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <textarea cols="40" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12 text-center">
                        <div class="form-group">
                          <a href="#" class="btn-send">Send Message</a>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Form Area End Here -->
        <!-- Footer Start Here -->
       



        <!-- Footer End Here -->
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(40.6700, -73.9400),
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ecddbb"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[
              {"color":"#ecddbb"},{"lightness":20}
              ]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#9f8f7b"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#9f8f7b"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9f8f7b"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
          };

          var map = new google.maps.Map(document.getElementById('map'),
          mapOptions);


          var marker = new google.maps.Marker({
            position: map.getCenter(),
            icon: 'images/pointer.png',
            map: map
          });

          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>

<!-- Mirrored from live.envalab.com/html/zooks/theme/zoo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2017 13:54:47 GMT -->
</html>