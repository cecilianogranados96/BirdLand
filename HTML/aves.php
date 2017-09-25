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

                                    
                                    
                                    <?php 
                                    
                                    $url_base = "?pag=".$_GET['pag']."";
                                    
                                    if(isset($_GET['clase'])){
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."";
                                    }
                                    if(isset($_GET['orden'])){
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."&orden=".$_GET['orden']."";
                                    }
                                    if(isset($_GET['suborden'])){
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."";
                                    }
                                    if(isset($_GET['familia'])){
                                         
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['familia']."";
                                     }
                                    if(isset($_GET['genero'])){     
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['familia']."&genero=".$_GET['genero']."";
                                     }
                                      if(isset($_GET['especie'])){
                                         $url_base = "?pag=".$_GET['pag']."&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['clase']."&genero=".$_GET['genero']."&especie=".$_GET['especie']."";
                                     }
                                    
                                    ?>
                                    
                                    
                                  
                                    <select class="form-control" onchange="window.location.href='<?php echo $url_base; ?>&clase='+this.value;">
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
                                </td>
                                <td>
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&orden='+this.value;" class="form-control" <?php if(!isset($_GET['clase'])) {echo "disabled"; }?>>
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
                                </td>
                                <td>
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&suborden='+this.value;" class="form-control" <?php if(!isset($_GET['orden'])) {echo "disabled"; }?>>
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
                                    </select>
                                </td>
                                <td>
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&familia='+this.value;" class="form-control" <?php if(!isset($_GET['suborden'])) {echo "disabled"; }?> >
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
                                    </select>
                                </td>
                                <td>
                                    <select onchange="window.location.href='<?php echo $url_base; ?>&genero='+this.value;" class="form-control" <?php if(!isset($_GET['familia'])) {echo "disabled"; }?> >
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
                                    </select>
                                    
                                    
                                </td>
                                <td>
                                      <select onchange="window.location.href='<?php echo $url_base; ?>&especie='+this.value;" class="form-control" <?php if(!isset($_GET['genero'])) {echo "disabled"; }?>>
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
                                    </select>
                                </td>
                                    
                            </tr>
                        </table>
                    

                    
                    <?php
                        $consulta = "";
                        if (isset($_GET['clase'])){
                            $consulta .= "clase = ".$_GET['clase']." ";
                        }
                        if (isset($_GET['orden'])){
                                $consulta .= "and orden = ".$_GET['orden']." ";
                            }
                        if (isset($_GET['suborden'])){
                                $consulta .= "and suborden = ".$_GET['suborden']." ";
                            }
                        if (isset($_GET['familia'])){
                                $consulta .= "and familia = ".$_GET['familia']." ";
                            }
                        if (isset($_GET['genero'])){
                                $consulta .= "and genero = ".$_GET['genero']." ";
                            }
                        if (isset($_GET['especie'])){
                                $consulta .= "and especie = ".$_GET['especie']." ";
                            }
                            echo $consulta;
                    
                        
                        
                        
                        
                        $stid = oci_parse($conn, 'select * from ave');
                        oci_execute($stid);
                        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                            echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-news-area">
                                        <div class="media">
                                          <div class="media-body">
                                            <center>
                                                <h4 class="media-heading">
                                                    <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">'.$row['NOMBRE_COMUN'].'</a>
                                                </h4>
                                                <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">
                                                  <img class="media-object" src="images/aves/'.$row['IMAGEN'].'">
                                                </a>
                                                <br>
                                                <div class="read-more">
                                                    <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">Ver Ficha</a>
                                                </div>
                                              </center>
                                          </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                        
                        
                        
                                
                    
                    ?>
                    <!--                
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
-->
                    
                
            </div>
        </div>