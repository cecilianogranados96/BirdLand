        <div class="breadcumb-area nineee">
            <div class="breadcumb-two-overlay">
                <div class="container">
                  <div class="row">
                    <div class="breadcumb">
                        <center><h2>Usuarios</h2></center>
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
                            <h2>Filtro de usuarios</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                               <div class="container">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="contact">
                                              <form>
                                                <fieldset>
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                      <input type="email" class="form-control" placeholder="Ingresa el nombre o el nick">
                                                    </div>
                                                  </div>

                                                  <div class="col-sm-12 text-center">
                                                    <div class="form-group">
                                                      <a href="#" class="btn-send">Filtrar</a>
                                                    </div>
                                                  </div>
                                                </fieldset>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                    </div>
                        
                        
                    
                
                    <div class="container">
                        <div class="row">
                            <?php 
                              $stid = oci_parse($conn, 'select * from persona order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                                echo '
                                        <div class="col-xs-2">
                                            <div class="user">
                                                <img class="profile-img" src="images/users/'.$row['FOTO'].'"
                                                alt="">
                                                <h3 class="lead" align="center"> <a href="?pag=usuario-detalle&id='.$row['ID_PERSONA'].'">
                                                    '.$row['NOMBRE'].' 
                                                </h3>
                                            </div>
                                        </div>';
                                            }
                                
                            ?>        
                        </div>
                    </div>
                   <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
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
-->
                    
                </div>
            </div>
</div>