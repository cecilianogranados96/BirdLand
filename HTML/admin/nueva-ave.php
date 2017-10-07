<script src="http://fabianlindfors.se/multijs/multi.min.js">

</script>
<link rel="stylesheet" type="text/css" href="http://fabianlindfors.se/multijs/multi.min.css">
<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Nueva ave</h2>
                </center>
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
                            <center>
                                <h2>Paso 1 - Clasificación</h2>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <center>
                                <div style="width: 35%;">
                                    <?php 
                                    
                                    $url_base = "?pag=".$_GET['pag']."";
                                    
                                    if(isset($_GET['clase'])){
                                         $url_base .= "&clase=".$_GET['clase']."";
                                    }
                                    if(isset($_GET['orden'])){
                                         $url_base .= "&orden=".$_GET['orden']."";
                                    }
                                    if(isset($_GET['suborden'])){
                                         $url_base .= "&suborden=".$_GET['suborden']."";
                                    }
                                    if(isset($_GET['familia'])){
                                         
                                         $url_base .= "&familia=".$_GET['familia']."";
                                     }
                                    if(isset($_GET['genero'])){     
                                         $url_base .= "&genero=".$_GET['genero']."";
                                     }
                                      if(isset($_GET['especie'])){
                                         $url_base .= "&especie=".$_GET['especie']."";
                                     }
                                    
                                    ?>


                                    <center>Clase</center>
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
                        </td>
                    </tr>
                    <?php } else { ?>
                    <form action='?pag=<?php echo $_GET['pag']; ?>&nuevo=1' method="POST" enctype="multipart/form-data">

                        <tr>
                            <td colspan="3" class="titulo">
                                <center>
                                    <h2>2 - Datos generales</h2>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nombre común:
                                <input name="nombre" type="text" placeholder="Nombre Comun" class="form-control" required>
                                <input name="especie" type="hidden" value="<?php echo $_GET['especie'];?>" class="form-control">
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
                                Tamaño (cm):
                                <input name="tamano" type="number" placeholder="Tamaño del ave" class="form-control" required>
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
                                    <button type="submit" class="btn btn-lg btn-success">Nuevo</button>
                                </center>
                            </td>
                        </tr>
                        <script>
                            var select = document.getElementById('ubicaciones');
                            multi(select, {
                                search_placeholder: 'Buscar ciudades...',
                            });
                        </script>
                        <?php } ?>
                </table>
                </form>
            </center>
        </div>
    </div>
</div>