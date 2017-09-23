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

                                    
                                    
                                    
                                    <select class="form-control" onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&clase='+this.value;">
                                       
                                    <?php
                                    if(isset($_GET['clase'])){
                                        $stid = oci_parse($conn, 'select * from clase where id_clase = '.$_GET['clase'].'');
                                        oci_execute($stid);
                                        $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                        echo  '<option value="'.$row['ID_CLASE'].'"> '.$row['NOMBRE'].'</option>';                            
                                    }else{
                                        echo  '<option value="0">Selecciona una opcion</option>';     
                                    }
                                    $stid = oci_parse($conn, 'select * from clase order by nombre');
                                    oci_execute($stid);
                                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                       echo   '<option value="'.$row['ID_CLASE'].'"> '.$row['NOMBRE'].'</option>';
                                    }
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="selectbasic" class="form-control" <?php if(!isset($_GET['clase'])){ echo "disabled"; $clase = "";} else { $clase = $_GET['clase'];  }?>   onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&orden='+this.value+'&clase=<?php echo $clase; ?>';">
                                    <?php
                                    if(isset($_GET['orden'])){
                                        $stid = oci_parse($conn, 'select * from orden where id_orden = '.$_GET['orden'].'');
                                        oci_execute($stid);
                                        $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                        echo  '<option value="'.$row['ID_ORDEN'].'"> '.$row['NOMBRE'].'</option>';                            
                                    }else{
                                        echo  '<option value="0">Selecciona una opcion</option>';     
                                    }
                                    $stid = oci_parse($conn, 'select * from orden order by nombre');
                                    oci_execute($stid);
                                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                       echo   '<option value="'.$row['ID_ORDEN'].'"> '.$row['NOMBRE'].'</option>';
                                    }
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="selectbasic" class="form-control" disabled>
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="selectbasic" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="selectbasic" class="form-control">
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
                                                <h4 class="media-heading"><a href="?pag=ave-detalle">Rowan: an orangutan known</a></h4>
                                                <a href="?pag=ave-detalle">
                                                  <img class="media-object" src="images/blog/1.png" alt="Generic placeholder image">
                                                </a>
                                                      <br>
                                                <div class="read-more">
                                                    <a href="?pag=ave-detalle">Ver Ficha</a>
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