<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Detalle de un usuario
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
    <div class="breadcumb-area nineee">
        <div class="breadcumb-two-overlay">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <div class="our-video-content-area">
        <div class="container">
            <div class="row latest-news">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title"> <br><br>
                        <h2>
                            <?php echo $persona['NOMBRE']." ".$persona['APELLIDO'] ; ?>
                        </h2>
                        <?php if(isset($_SESSION['id_persona'])) {
                                if ($_SESSION['id_persona'] == $persona2  ){
                                    echo '<center><a href="?pag=salir" class="btn btn-warning"> <i class="fa fa-sign-in" aria-hidden="true"></i> Salir: '.$nombre[0].'</a></center><br><br>';
                                }
                            }?>
                    </div>
                </div>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
                <div class="mainbody container-fluid">
                    <div class="row">
                        <div style="padding-top:50px;"> </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media">
                                        <div align="center">
                                            <img class="thumbnail img-responsive" src="images/users/<?php echo $persona['FOTO']; ?>" width="300px" height="300px">
                                            <?php    
                                        if(isset($_SESSION['id_persona'])) {
                                            if ($_SESSION['id_persona'] == $persona2  ){
                                                echo '<p><center><a href="?pag=editar_usuario" class="btn btn-success">Editar perfil de: '.$nombre_largo.'</a></center></p> ';
                                            }
                                        }
                                        ?>
                                        </div>
                                        <div class="media-body">

                                            <hr>
                                            <h3><strong>Avistamientos</strong></h3>
                                            <p>
                                                <h1>
                                                    <center><b><?php echo $total; ?></b></center>
                                                </h1>
                                            </p>
                                            <hr>
                                            <h3><strong>Profesión</strong></h3>
                                            <p>
                                                <center>
                                                    <?php echo $persona['PROFESION']; ?>
                                                </center>
                                            </p>
                                            <hr>
                                            <h3><strong>Fecha de nacimiento</strong></h3>
                                            <p>
                                                <center>
                                                    <?php echo $persona['FECHA_NACIMIENTO']; ?>
                                                </center>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <?php
                            $stid = oci_parse($conn, "select * from table(pck_avistamiento.avistamiento_persona_id(".$persona2." ))");
                            oci_execute($stid);
                            $aves = "";
                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
								$stid2 = oci_parse($conn, 'BEGIN :r := PCK_PUNTAJE.TOTAL_PUNTAJE_AVISTAMIENTO('.$row['ID_AVISTAMIENTO'].', NULL); END;');
								oci_bind_by_name($stid2, ':r', $tot, 40);
								oci_execute($stid2);
                                echo ' <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                        <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'"><img src="images/avistamientos/'.$row['FOTO'].'" class="img-responsive img-thumbnail" style="width: 500px;height: 230px;">
                                        <center><span class="label label-success"> '.$row['NOMBRE_COMUN'].' <span class="fa fa-heart" aria-hidden="true"></span> '.$tot.'</span>
                                        </a>
                                        </center>
                                    </div>
                                   ';
                            }
                        ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
