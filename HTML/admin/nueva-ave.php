        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Nueva ave</h2></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="animal-details">
            <div class="container">
                <div class="row">
                    <?php if (isset($mensaje)) {echo $mensaje;} ?>

                        <center>
                            <table class="table" style="width: 35%;">
                                
                        
                                    <?php if (!isset($_GET['especie'])) { ?>                
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>Paso 1 - Clasificacion</h2></center>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            Clase:
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
                                            Orden
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
                                            SubOrden
                                            <select name="selectbasic" class="form-control" <?php if(!isset($_GET['orden'])){ echo "disabled"; $orden = "";} else { $orden = $_GET['orden'];  }?>   onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&suborden='+this.value+'&orden=<?php echo $orden; ?>&clase=<?php echo $clase; ?>';">
                                            <?php
                                            if(isset($_GET['suborden'])){
                                                $stid = oci_parse($conn, 'select * from suborden where id_suborden = '.$_GET['suborden'].'');
                                                oci_execute($stid);
                                                $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                                echo  '<option value="'.$row['ID_SUBORDEN'].'"> '.$row['NOMBRE'].'</option>';                            
                                            }else{
                                                echo  '<option value="0">Selecciona una opcion</option>';     
                                            }
                                            $stid = oci_parse($conn, 'select * from suborden order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                               echo   '<option value="'.$row['ID_SUBORDEN'].'"> '.$row['NOMBRE'].'</option>';
                                            }
                                            ?>
                                            </select>
                                            Familia
                                             <select name="selectbasic" class="form-control" <?php if(!isset($_GET['suborden'])){ echo "disabled"; $suborden = "";} else { $suborden = $_GET['suborden'];  }?>   onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&familia='+this.value+'&suborden=<?php echo $suborden; ?>&orden=<?php echo $orden; ?>&clase=<?php echo $clase; ?>';">
                                            <?php
                                            if(isset($_GET['familia'])){
                                                $stid = oci_parse($conn, 'select * from familia where id_familia = '.$_GET['familia'].'');
                                                oci_execute($stid);
                                                $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                                echo  '<option value="'.$row['ID_FAMILIA'].'"> '.$row['NOMBRE'].'</option>';                            
                                            }else{
                                                echo  '<option value="0">Selecciona una opcion</option>';     
                                            }
                                            $stid = oci_parse($conn, 'select * from familia order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                               echo   '<option value="'.$row['ID_FAMILIA'].'"> '.$row['NOMBRE'].'</option>';
                                            }
                                            ?>
                                            </select>
                                            Genero:
                                            <select name="selectbasic" class="form-control" <?php if(!isset($_GET['familia'])){ echo "disabled"; $familia = "";} else { $familia = $_GET['familia'];  }?>   onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&genero='+this.value+'&familia=<?php echo $familia; ?>&suborden=<?php echo $suborden; ?>&orden=<?php echo $orden; ?>&clase=<?php echo $clase; ?>';">
                                            <?php
                                            if(isset($_GET['genero'])){
                                                $stid = oci_parse($conn, 'select * from genero where id_genero = '.$_GET['genero'].'');
                                                oci_execute($stid);
                                                $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                                echo  '<option value="'.$row['ID_GENERO'].'"> '.$row['NOMBRE'].'</option>';                            
                                            }else{
                                                echo  '<option value="0">Selecciona una opcion</option>';     
                                            }
                                            $stid = oci_parse($conn, 'select * from genero order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                               echo   '<option value="'.$row['ID_GENERO'].'"> '.$row['NOMBRE'].'</option>';
                                            }
                                            ?>
                                            </select>
                                            Especie:
                                            <select name="especie" class="form-control" <?php if(!isset($_GET['genero'])){ echo "disabled"; $genero = "";} else { $genero = $_GET['genero'];  }?>   onchange="window.location.href = '?pag=<?php echo $_GET['pag']; ?>&especie='+this.value+'&genero=<?php echo $genero; ?>&familia=<?php echo $familia; ?>&suborden=<?php echo $suborden; ?>&orden=<?php echo $orden; ?>&clase=<?php echo $clase; ?>';">
                                            <?php
                                            if(isset($_GET['especie'])){
                                                $stid = oci_parse($conn, 'select * from especie where id_especie = '.$_GET['especie'].'');
                                                oci_execute($stid);
                                                $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
                                                echo  '<option value="'.$row['ID_ESPECIE'].'"> '.$row['NOMBRE'].'</option>';                            
                                            }else{
                                                echo  '<option value="0">Selecciona una opcion</option>';     
                                            }
                                            $stid = oci_parse($conn, 'select * from especie order by nombre');
                                            oci_execute($stid);
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                               echo   '<option value="'.$row['ID_ESPECIE'].'"> '.$row['NOMBRE'].'</option>';
                                            }
                                            ?>
                                            </select>
                                        </td>            
                                    </tr>
                                    
                                    <?php } else { ?>
                                <form action='?pag=<?php echo $_GET['pag']; ?>&nuevo=1' method="POST" enctype="multipart/form-data"  >
                                
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>2 - Datos generales</h2></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nombre Comun:
                                            <input name="nombre" type="text" placeholder="Nombre Comun" class="form-control" required> 
                                            <input name="especie" type="hidden" value="<?php echo $_GET['especie'];?>" class="form-control" > 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Imagen de referencia:
                                            <input name="foto" type="file" class="form-control" required> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Color:
                                            <select name="color" class="form-control" required>
                                                <?php echo $colores; ?>
                                            </select>
                                            
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Tipo:
                                            <select name="tipo" class="form-control" required>
                                                <?php echo $tipos; ?>
                                            </select>
                                            
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            Tamaño (CM):
                                            <input  name="tamano" type="number" placeholder="Tamaño del ave" class="form-control" required> 
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td> 
                                            <center>
                                                <button type="submit" class="btn btn-lg btn-success">Nuevo</button>
                                            </center>
                                        </td>
                                    </tr>
                                    
                                    
                                    <?php } ?>
                                    
                                    
                                   
                                </table>
                            </form>
                        </center>
                </div>
            </div>
        </div>