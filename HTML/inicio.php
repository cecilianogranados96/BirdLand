<div class="slider-area">
    <div class="slide-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">BirdLand</h2>
                    <p data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">Un pequeño rincon de avistamientos!</p>
                    <a href="?page=mapa" data-wow-delay="0.3s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">Mapa</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 data-wow-delay="0.5s" class="span3 wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">Avistamientos</h2>
                    <p>Observa y subi en el ranking al tener mas avistamientos!</p>
                    <a href="?page=estadisticas">Estadisticas</a>
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
                    <h2>Mas votados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php             
        $stid = oci_parse($conn, ' Select * from (SELECT a.id_avistamiento, a.id_persona, COUNT(*) as "likes" FROM (avistamiento a INNER JOIN puntaje p ON a.ID_AVISTAMIENTO = p.ID_AVISTAMIENTO) GROUP BY a.id_avistamiento, a.id_persona ORDER BY "likes" desc) where rownum <= 10');
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            $stid1 = oci_parse($conn, "select persona.id_persona,persona.nombre,persona.apellido,avistamiento.foto,avistamiento.id_avistamiento,avistamiento.id_ave from avistamiento inner join persona on avistamiento.id_persona = persona.id_persona where id_avistamiento =  ".$row['ID_AVISTAMIENTO']." ");
            oci_execute($stid1);
            $per = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS);
               echo '
                                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                          <a href="?pag=ave-detalle&id='.$per['ID_AVE'].'"><img src="images/avistamientos/'.$per['FOTO'].'" style="width: 200px;height: 150px;" class="img-thumbnail"></a>
                                          
                                          
                                        <div class="plan-details">
                                            <h3><a href="?pag=usuario-detalle&id='.$per['ID_PERSONA'].'">'.$per['NOMBRE'].' '.$per['APELLIDO'].'</a></h3>
                                           
                                            <span class="label label-success" style="font-size: 120%;"><span class="fa fa-heart" aria-hidden="true" > '.$row['likes'].' </span> </span>
                                     
                                        </div>
                                    </div>
                                </div>
                            ';
        }
?>
        </div>
    </div>
</div>
<!-- Our Animal Start Here -->
<div class="our-animal-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">
                    <h2>Algunas aves</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                <div class="total-area">
                    <?php        
                        $stid = oci_parse($conn, 'select * from ave ');
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
                                <h4><a href="single-animal.html">'.$row['NOMBRE_COMUN'].'</a></h4>
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
                    <h2>Top - avistamientos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php                
                $stid = oci_parse($conn, " SELECT  id_ave, COUNT(*) cantidad FROM avistamiento WHERE ROWNUM <= 10 GROUP BY id_ave HAVING COUNT(*) > 0  order by cantidad");
                oci_execute($stid);
                while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    $stid1 = oci_parse($conn, "SELECT * from avistamiento inner join ave on ave.id_ave = avistamiento.id_ave WHERE avistamiento.id_ave = ".$row['ID_AVE']." ");
                    oci_execute($stid1);
                    $ave = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS);
                   echo  '<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-plan">
                                     <a href="?pag=ave-detalle&id='.$row['ID_AVE'].'"><img src="images/avistamientos/'.$ave['FOTO'].'" style="width: 200px;height: 150px;" class="img-thumbnail"></a>
                                    <div class="plan-details">
                                        <h3><a href="plan.html">'.$ave['NOMBRE_COMUN'].'</a></h3>
                                        <p>Avistamientos: '.$row['CANTIDAD'].'</p>
                                        <div class="read-more">
                                            <a href="?page=usuarios">Ver mas</a>
                                        </div>
                                    </div>
                                </div>
                          </div>';
                }
            ?>
        </div>
    </div>
</div>
