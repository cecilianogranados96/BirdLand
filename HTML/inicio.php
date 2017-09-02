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
        <!-- Slider Area End Here -->
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
                        for ($x =0; $x<6;$x++){
                            echo '
                                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                        <div class="plan-icon">
                                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="plan-details">
                                            <h3><a href="plan.html">Nombre</a></h3>
                                            <p>Avistamientos: 40</p>
                                            <div class="read-more">
                                                <a href="?page=usuarios">Ver mas</a>
                                            </div>
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
                            
                           <?php for ($x =0; $x<6;$x++){
                            echo '
                                
                            <div class="singla-animal">
                                <div class="image">
                                    <a href="single-animal.html"><img src="images/animal/1.png" alt=""></a>
                                    <div class="overley">
                                        <div class="button">
                                            <a href="single-details.html">Ver ficha</a>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="single-animal.html">Nombre del ave</a></h4>
                            </div>';
                            }
                            ?>
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
                        for ($x =0; $x<6;$x++){
                            echo '
                                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-plan">
                                        <div class="plan-icon">
                                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="plan-details">
                                            <h3><a href="plan.html">Nombre</a></h3>
                                            <p>Avistamientos: 40</p>
                                            <div class="read-more">
                                                <a href="?page=usuarios">Ver mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>