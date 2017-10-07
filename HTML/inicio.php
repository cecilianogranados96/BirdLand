<div class="slider-area">
    <div class="slide-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">BirdLand</h2>
                    <p data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">¡Un pequeño rincón de avistamientos!</p>
                    <a href="?page=mapa" data-wow-delay="0.2s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInDown;">Mapa</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">Avistamientos</h2>
                    <p  data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">¡Observá y subí en el ranking al tener más avistamientos!</p>
                    <a href="?page=estadisticas"data-wow-delay="0.3s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">Estadísticas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide-dot">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="slide-dots">
                    <a class="slide-dots-next"></a>
                    <a class="slide-dots-prev"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-plan-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">
                    <h2>Más votados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php             
<<<<<<< HEAD
        $stid = oci_parse($conn, 'select * from table(pck_puntaje.puntaje_avistamiento)');
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {			
=======
        $stid = oci_parse($conn, ' select * from table(pck_puntaje.puntaje_avistamiento)');
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
>>>>>>> origin/master
            $stid1 = oci_parse($conn, 'select * from table(PCK_AVISTAMIENTO.AVISTAMIENTO_ID('.$row['ID_AVISTAMIENTO'].'))');
            oci_execute($stid1);
            $per = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS);
               echo '
                                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                          <a href="?pag=ave-detalle&id='.$per['ID_AVE'].'"><img src="images/avistamientos/'.$per['FOTO'].'" style="width: 200px;height: 150px;" class="img-thumbnail"></a>
                                          
                                          
                                        <div class="plan-details">
                                            <h3><a href="?pag=usuario-detalle&id='.$per['ID_PERSONA'].'">'.$per['NOMBRE'].' '.$per['APELLIDO'].'</a></h3>
                                           
                                            <span class="label label-success" style="font-size: 120%;"><span class="fa fa-heart" aria-hidden="true" > '.$row['LIKES'].' </span> </span>
                                     
                                        </div>
                                    </div>
                                </div>
                            ';
        }
?>
        </div>
    </div>
</div>
<div class="our-animal-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">
                    <h2>Todo un mundo de aves</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                <div class="total-area">
                    <?php        
                        $stid = oci_parse($conn, 'select * from table(get_ave)');
                        oci_execute($stid);
                        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                            echo '
                                
                            <div class="singla-animal">
                                <div class="image">
                                    <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'"><img src="images/aves/'.$row['IMAGEN'].'" ></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">Ver ficha</a>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">'.$row['NOMBRE_COMUN'].'</a></h4>
                            </div>';
                        }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-plan-area">
    <div class="container">
        <div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">
                    <h2>Top: Avistamientos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php                
                $stid = oci_parse($conn, 'select * from table(pck_avistamiento.avistamiento_cantidad)');
                oci_execute($stid);
                while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    $stid1 = oci_parse($conn, 'select * from table(pck_avistamiento.avistamiento_ave_id('.$row['ID_AVE'].'))');
                    oci_execute($stid1);
                    $ave = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS);
                   echo  '<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-plan">
                                     <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'"><img src="images/avistamientos/'.$ave['FOTO'].'" style="width: 200px;height: 150px;" class="img-thumbnail"></a>
                                    <div class="plan-details">
                                        <h3><a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">'.$ave['NOMBRE_COMUN'].'</a></h3>
                                        <p>Avistamientos: '.$row['CANTIDAD'].'</p>
                                        <div class="read-more">
                                            <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                          </div>';						  
                }
            ?>
        </div>
    </div>
</div>
