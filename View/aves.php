<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Listado de aves
#
# Desarrollo:
# 
# - JOSE ANDRES CECILIANO GRANADOS
#
# Mejoras:
# 
# - SILVIA CALDERON NAVARRO
#
###################################################################
?>
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
                    <table class="table" id="table">
                        <tr>

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
                                    <label class="col-md-4 control-label" for="selectbasic"><center>Suborden</center></label>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <label class="col-md-4 control-label" for="selectbasic"><center>Familia</center></label>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <label class="col-md-4 control-label" for="selectbasic"><center>Género</center></label>
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                        $stid = oci_parse($conn, 'select * from table(get_clase)');
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['clase'])){											
                                            $stid = oci_parse($conn, 'select * from table(pck_orden.orden_clase_id('.$_GET['clase'].'))');
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['orden'])){
                                            $stid = oci_parse($conn, 'select * from table(pck_suborden.suborden_orden_id('.$_GET['orden'].'))');
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['suborden'])){
                                            $stid = oci_parse($conn, 'select * from table(pck_familia.familia_suborden_id('.$_GET['suborden'].'))');
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['familia'])){
                                            $stid = oci_parse($conn, 'select * from table(pck_genero.genero_familia_id('.$_GET['familia'].'))');
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
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['genero'])){
                                            $stid = oci_parse($conn, 'select * from table(pck_especie.especie_genero_id('.$_GET['genero'].'))');
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
 
                        //$stid = oci_parse($conn, "select * from table(pck_avistamiento.avistamiento_completo)".$where." ");
                        //oci_execute($stid);

						$stid = oci_parse($conn, "select ave.id_ave,ave.imagen,ave.nombre_comun,genero.nombre ||' ' || especie.nombre nombre_cientifico
                        from ave
                        inner join especie on ave.id_especie = especie.id_especie
                        inner join genero on especie.id_genero = genero.id_genero
                        inner join familia on genero.id_familia = familia.id_familia
                        inner join suborden on familia.id_suborden = suborden.id_suborden
                        inner join orden on suborden.id_orden = orden.id_orden
                        inner join clase on orden.id_clase = clase.id_clase 
                        inner join tipo on ave.id_estado = tipo.id_tipo ".$where." ");
                        oci_execute($stid);
						
						oci_execute ($stid,OCI_DEFAULT);  
						$Num_Rows = oci_fetch_all($stid, $row);  

						

						$Prev_Page = $Page-1;  
						$Next_Page = $Page+1;  
						  
						$Page_Start = (($total_pagina*$Page)-$total_pagina);  
							
						if($Num_Rows<=$total_pagina)  
						{  
							$Num_Pages =1;  
						}  
						else if(($Num_Rows % $total_pagina)==0)  
						{  
							$Num_Pages =($Num_Rows/$total_pagina) ;  
						}  
						else  
						{  
							$Num_Pages =($Num_Rows/$total_pagina)+1;  
							$Num_Pages = (int)$Num_Pages;  
						}  
						$Page_End = $total_pagina * $Page;  
						if ($Page_End > $Num_Rows)  
						{  
							$Page_End = $Num_Rows;  
						}  
						$registros = oci_num_rows($stid);
						$filas = "";
										   echo "<center><h2>Registros: ".oci_num_rows($stid)."</h2></center>";
						for($i=$Page_Start;$i<$Page_End;$i++)  
						{  

							 echo '
														<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
															<div class="single-news-area" style="height: 52%">
																<div class="media">
																  <div class="media-body">
																	<center>
																		<h4 class="media-heading">
																			<a href="?pag=ave-detalle&id='.$row['ID_AVE'][$i].'">'.utf8_encode($row['NOMBRE_COMUN'][$i]).'</a>
																		</h4>
																		<a href="?pag=ave-detalle&id='.$row['ID_AVE'][$i].'">
																		  <img class="img-thumbnail" src="images/aves/'.$row['IMAGEN'][$i].'" style="width: 200px;height: 170px;" >
																		</a>
																		<br>
																		<div class="read-more">
																			<a href="?pag=ave-detalle&id='.$row['ID_AVE'][$i].'"><i><b><u>'.$row['NOMBRE_CIENTIFICO'][$i].'</u></b></i></a>
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
                                    <?php
                            if($Prev_Page)  
                            {  

                                 echo '<li><a href="'.$url_base.'&'.$Prev_Page.'#table">»</a></li>';
                            }  

                            for($i=1; $i<=$Num_Pages; $i++){  
                                if($i != $Page)  
                                {  
                                    echo '<li><a href="'.$url_base.'&Page='.$i.'#table">'.$i.'</a></li>';
                                }  
                                else  
                                {  
                                    echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                                }  
                            } 

                            if($Page!=$Num_Pages)  
                            {  

                                echo '<li><a href="'.$url_base.'&'.$Next_Page.'#table">»</a></li>';
                            }  
                        ?>
                                </ul>
                            </div>
                        </div>
            </div>
        </div>
