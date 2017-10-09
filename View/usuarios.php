<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Usuarios en lista
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
                    <div class="breadcumb">
                        <center>
                            <h2>Usuarios</h2>
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
                                                    <input type="email" class="form-control" placeholder="Ingresa el nombre o el usuario">
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
                            $stid = oci_parse($conn, 'select * from table(GET_PERSONA)');
                            oci_execute($stid);
                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                echo '<div class="col-xs-2">
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

            </div>
        </div>
    </div>
