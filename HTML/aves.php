        <div class="breadcumb-area two twooo">
                <div class="breadcumb-two-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="breadcumb">
                                <center><h2>Aves</h2></center>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="our-video-content-area">
            <div class="container">
                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">  <br><br>
                            <h2>Filtrar aves</h2>
                        </div>
                    </div>
                    
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="table">           
                               <tr>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Nombre</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Clase</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Orden</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">SubOrden</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Familia</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Genero</label>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <label class="col-md-4 control-label" for="selectbasic">Especie</label>
                                        </center>
                                    </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="textinput" name="textinput" type="text" placeholder="Nombre del ave" class="form-control input-md">
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>

                            </tr>
                        </table>

                        <center>
                            <div class="all-news">
                                <a href="services.html">Filtrar</a>
                            </div>
                        </center>
                    </form>
                    
                    
                    <?php 
                        for ($x =0; $x<6;$x++){
                                echo '
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-news-area">
                                            <div class="media">
                                              <div class="media-body">
                                                  <center>
                                                <h4 class="media-heading"><a href="#">Rowan: an orangutan known</a></h4>
                                                <a href="#">
                                                  <img class="media-object" src="images/blog/1.png" alt="Generic placeholder image">
                                                </a>
                                                      <br>
                                                <div class="read-more">
                                                    <a href="#">Ver Ficha</a>
                                                </div>
                                                  </center>
                                              </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                    ?>
                                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                         <div class="container">
                            <ul class="pagination">
                              <li class="disabled"><a href="#">«</a></li>
                              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>