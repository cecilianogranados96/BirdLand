<div class="breadcumb-area two twooo">
    <div class="breadcumb-two-overlay">
        <div class="container">
            <div class="row">
                <div class="breadcumb">
                    <center>
                        <h2>Aves</h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-video-content-area">
    <div class="container">
        <div class="row latest-news">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title"> <br><br>
                    <h2>Filtrar aves</h2>
                </div>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <!--<td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Nombre</center></label>
                            </center>
                        </td>-->
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Clase</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Orden</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>SubOrden</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Familia</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Genero</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Especie</center></label>
                            </center>
                        </td>
                        <td>
                            <center>
                                <label class="col-md-4 control-label" for="selectbasic"><center>Tamaño</center></label>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <!--<td>
                            <input id="textinput" name="textinput" type="text" placeholder="Nombre del ave" class="form-control input-md">
                        </td>-->
                        
                        <td>
                


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
                            <select onchange="window.location.href='<?php echo $url_base; ?>&orden='+this.value;" class="form-control" <?php if(!isset($_GET[ 'clase'])) {echo "disabled"; }?>>
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
                            <select onchange="window.location.href='<?php echo $url_base; ?>&suborden='+this.value;" class="form-control" <?php if(!isset($_GET[ 'orden'])) {echo "disabled"; }?>>
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
                            <select onchange="window.location.href='<?php echo $url_base; ?>&familia='+this.value;" class="form-control" <?php if(!isset($_GET[ 'suborden'])) {echo "disabled"; }?> >
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
                            <select onchange="window.location.href='<?php echo $url_base; ?>&genero='+this.value;" class="form-control" <?php if(!isset($_GET[ 'familia'])) {echo "disabled"; }?> >
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
                            <select onchange="window.location.href='<?php echo $url_base; ?>&especie='+this.value;" class="form-control" <?php if(!isset($_GET[ 'genero'])) {echo "disabled"; }?>>
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
                        <td style="width:19%">
                            <div class="col-md-5">
                                <input type="num" name="t1" class="form-control" placeholder="Min" onchange="window.location.href='<?php echo $url_base; ?>&min='+this.value+'#map'" <?php if(isset($_GET[ 'min'])){ echo 'value="'.$_GET[ 'min']. '"';}?>>
                            </div>
                            <div class="col-md-2">
                                <center>y</center>
                            </div>
                            <div class="col-md-5">
                                <input type="num" name="t1" class="form-control" placeholder="Max" onchange="window.location.href='<?php echo $url_base; ?>&max='+this.value+'#map'" <?php if(isset($_GET[ 'max'])){ echo 'value="'.$_GET[ 'max']. '"';}?>>
                            </div>
                        </td>
                    </tr>
                </table>
                
                <?php
 
                               
                        $stid = oci_parse($conn, "select ave.id_ave,ave.imagen,ave.nombre_comun,genero.nombre ||' ' || especie.nombre nombre_cientifico, avistamiento.latitud,avistamiento.longitud
                        from avistamiento
                        inner join ave on ave.id_ave = avistamiento.id_ave
                        inner join especie on ave.id_especie = especie.id_especie
                        inner join genero on especie.id_genero = genero.id_genero
                        inner join familia on genero.id_familia = familia.id_familia
                        inner join suborden on familia.id_suborden = suborden.id_suborden
                        inner join orden on suborden.id_orden = orden.id_orden
                        inner join clase on orden.id_clase = clase.id_clase 
                        inner join tipo on ave.id_estado = tipo.id_tipo ".$where." ");
                        oci_execute($stid);
  
                echo "<center><h2>Registros: ".oci_num_rows($stid)."</h2></center>";
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
                                                  <img class="media-object" src="images/aves/'.$row['IMAGEN'].'" style="width: 200px;height: 170px;">
                                                </a>
                                                <br>
                                                <div class="read-more">
                                                    <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'"><i><b><u>'.$row['NOMBRE_CIENTIFICO'].'</u></b></i></a>
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
