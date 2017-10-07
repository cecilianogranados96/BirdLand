<script src="http://fabianlindfors.se/multijs/multi.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fabianlindfors.se/multijs/multi.min.css">
<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Administración: Aves</h2>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="animal-details">
    <div class="container">
        <div class="row">
            <?php if (isset($mensaje)) {echo $mensaje;} ?>

            <?php if (!isset($_GET['edit']) and !isset($_GET['cespecie']) ) {?>

            <div class="contact-form " style="padding: 0px 0;">
                <div class="contact">
                    <form action="?pag=<?php echo $_GET['pag']; ?>&b=1" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="busqueda" class="form-control" placeholder="Busque cualquier campo" required>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn-send">Filtrar</button>
                                    <a href="?pag=<?php echo $_GET['pag']; ?>" class="btn-send">Limpiar</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php } ?>

            <!--EDITAR-->
            <?php if(isset($_GET['edit'])) { ?>

            <center>

                <table class="table" style="width: 35%;">


                    <?php if (isset($_GET['cespecie'])) { ?>


                    <tr>
                        <td colspan="3" class="titulo">
                            <center>
                                <h2>Cambiar clasificación</h2>
                            </center>
                        </td>
                    </tr>

                </table>
                <center>
                    <div style="width: 35%;">
                        <?php 
                                    
                                    $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1";
                                    
                                    if(isset($_GET['clase'])){
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."";
                                    }
                                    if(isset($_GET['orden'])){
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."&orden=".$_GET['orden']."";
                                    }
                                    if(isset($_GET['suborden'])){
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."";
                                    }
                                    if(isset($_GET['familia'])){
                                         
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['familia']."";
                                     }
                                    if(isset($_GET['genero'])){     
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['familia']."&genero=".$_GET['genero']."";
                                     }
                                      if(isset($_GET['especie'])){
                                         $url_base = "?pag=".$_GET['pag']."&id=".$_GET['id']."&edit=1&cespecie=1&clase=".$_GET['clase']."&orden=".$_GET['orden']."&suborden=".$_GET['suborden']."&familia=".$_GET['clase']."&genero=".$_GET['genero']."&especie=".$_GET['especie']."";
                                     }
                                    
                                    ?>


                        <center>Clase</center>
                        <select class="form-control" onchange="window.location.href='<?php echo $url_base; ?>&clase='+this.value;">
                                    <?php
<<<<<<< HEAD
                                        echo  '<option value="0">Seleccione una opción</option>';  
=======
                                        echo  '<option value="0">Selecciona una opcion</option>';  
>>>>>>> origin/master
                                        $stid = oci_parse($conn, 'sselect * from table(GET_CLASE)');
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
                        <center>Orden</center>
                        <select onchange="window.location.href='<?php echo $url_base; ?>&orden='+this.value;" class="form-control" <?php if(!isset($_GET[ 'clase'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['clase'])){
                                            $stid = oci_parse($conn, 'select * from table(PCK_ORDEN.ORDEN_CLASE_ID( '.$_GET['clase'].'))');
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
                        <center>SubOrden</center>
                        <select onchange="window.location.href='<?php echo $url_base; ?>&suborden='+this.value;" class="form-control" <?php if(!isset($_GET[ 'orden'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['orden'])){
                                            $stid = oci_parse($conn, 'select * from table(PCK_SUBORDEN.SUBORDEN_ORDEN_ID( '.$_GET['orden'].'))');
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
                        <center>Familia</center>
                        <select onchange="window.location.href='<?php echo $url_base; ?>&familia='+this.value;" class="form-control" <?php if(!isset($_GET[ 'suborden'])) {echo "disabled"; }?> >
                                    <?php
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['suborden'])){
                                            $stid = oci_parse($conn, 'select * from table(PCK_familia.familia_suborden_ID( '.$_GET['suborden'].'))');
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
                        <center>Genero</center>
                        <select onchange="window.location.href='<?php echo $url_base; ?>&genero='+this.value;" class="form-control" <?php if(!isset($_GET[ 'familia'])) {echo "disabled"; }?> >
                                    <?php
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['familia'])){
                                            $stid = oci_parse($conn, 'select * from table(PCK_GENERO.GENERO_FAMILIA_ID( '.$_GET['familia'].'))');
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

                        <center>Especie</center>
                        <select onchange="window.location.href='<?php echo $url_base; ?>&especie='+this.value;" class="form-control" <?php if(!isset($_GET[ 'genero'])) {echo "disabled"; }?>>
                                    <?php
                                        echo  '<option value="0">Seleccione una opción</option>';  
                                         if(isset($_GET['genero'])){
                                            $stid = oci_parse($conn, 'select * from table(pck_especie.especie_genero_id ( '.$_GET['genero'].'))');
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
                    </div>
                </center>

                <?php } else { ?>


                <form action='?pag=<?php echo $_GET['pag']; ?>&edit=1&id=<?php echo $_GET['id']; ?>&edit_normal=1' method="POST" enctype="multipart/form-data">

                    <tr>
                        <td colspan="3" class="titulo">
                            <center>
                                <h2>Datos generales</h2>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre común:
                            <input name="nombre" type="text" value="<?php echo $ave['NOMBRE']; ?>" class="form-control" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            Especie:
                            <input type="text" value="<?php echo $ave['ESPECIE']; ?>" class="form-control" disabled>
                            <center><a class="btn btn-warning" href="?pag=<?php echo $_GET['pag']; ?>&id=<?php echo $_GET['id']; ?>&edit=1&cespecie=1">Cambiar especie</a></center>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <img src="images/aves/<?php echo $ave['IMAGEN']; ?>" class="img-rounded"> Cambiar:

                            <input name="foto" type="file" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Color:
                            <select name="color" class="form-control" required>
                                                <option value="<?php echo $ave['COLORID']; ?>"><?php echo $ave['COLOR']; ?></option>
                                                <?php echo $colores; ?>
                                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tipo:
                            <select name="tipo" class="form-control" required>
                                                <option value="<?php echo $ave['TIPOID']; ?>"><?php echo $ave['TIPO']; ?></option>
                                                <?php echo $tipos; ?>
                                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tamaño (CM):
                            <input name="tamano" type="number" value="<?php echo $ave['TAMANO']; ?>" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Ubicaciones:
                            <select multiple="multiple" name="ubicaciones[]" id="ubicaciones">
                         
                                                <?php echo $ubicaciones; ?>
                                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                            </center>
                        </td>
                    </tr>

                </form>

                <script>
                    var select = document.getElementById('ubicaciones');
                    multi(select, {
                        search_placeholder: 'Buscar ciudades...',
                    });

                </script>



                <?php } ?>



                </table>








                <?php } ?>


                <?php if (!isset($_GET['edit']) and !isset($_GET['cespecie']) ) {?>
                <table class="table table-striped" style="background-color: #FFFFFF;" id="table">
                    <tr>
                        <td class="titulo">
                            <center>Imagen</center>
                        </td>
                        <td class="titulo">
                            <center>Nombre</center>
                        </td>
                        <td class="titulo">
                            <center>Especie</center>
                        </td>
                        <td class="titulo">
                            <center>Color</center>
                        </td>
                        <td class="titulo">
                            <center>Tipo</center>
                        </td>
                        <td class="titulo">
                            <center>Tamaño</center>
                        </td>
                        <td class="titulo">
                            <center>Editar</center>
                        </td>
                    </tr>
                    <?php echo $filas; ?>
                </table>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="container">
                        <ul class="pagination">
                            <?php
                                    if($Prev_Page)  
                                    {  

                                         echo '<li><a href="?pag='.$_GET['pag'].'&'.$Prev_Page.'#table">»</a></li>';
                                    }  

                                    for($i=1; $i<=$Num_Pages; $i++){  
                                        if($i != $Page)  
                                        {  
                                            echo '<li><a href="?pag='.$_GET['pag'].'&Page='.$i.'#table">'.$i.'</a></li>';
                                        }  
                                        else  
                                        {  
                                            echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                                        }  
                                    } 

                                    if($Page!=$Num_Pages)  
                                    {  

                                        echo '<li><a href="?pag='.$_GET['pag'].'&'.$Next_Page.'#table">»</a></li>';
                                    }  
                                ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
</div>
