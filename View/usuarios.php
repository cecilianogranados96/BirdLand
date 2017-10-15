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
                <div class="contact-form" style="    padding: 0px 0;" id="user">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contact">


                                    <form action="?pag=<?php echo $_GET['pag']; ?>&b=1#user" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="busqueda" class="form-control" placeholder="Busque cualquier campo">
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
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                        <?php 
                            if (isset($_POST['busqueda'])){
                                $extra = "where nombre LIKE '%".$_POST['busqueda']."%' or apellido LIKE '%".$_POST['busqueda']."%'";    
                            }else{
                                $extra = "";
                            }
                            $stid = oci_parse($conn, 'select * from table(GET_PERSONA) '.$extra.' ');
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
