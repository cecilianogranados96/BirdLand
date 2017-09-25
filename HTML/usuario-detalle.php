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
                        <div class="section-title">  <br><br>
                            <h2><?php echo $persona['NOMBRE']." ".$persona['APELLIDO'] ; ?></h2>
                            <?php if(isset($_SESSION['id_persona'])) {
                                echo '<center><a href="?pag=salir" class="btn btn-warning"> <i class="fa fa-sign-in" aria-hidden="true"></i> Salir: '.$nombre[0].'</a></center><br><br>';
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
                                <?php if(isset($_SESSION['id_persona'])) {
                                echo '<p><center><a href="?pag=editar_usuario" class="btn btn-success">Editar perfil de: '.$nombre_largo.'</a></center></p> ';
                            }?>
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>Puntos</strong></h3>
                            <p>##</p>
                            <hr>
                            <h3><strong>Avistamientos</strong></h3>
                            <p>##</p>
                            <hr>
                            <h3><strong>Profesion</strong></h3>
                            <p><?php echo $persona['PROFESION']; ?></p>
                            <hr>
                            <h3><strong>Cumpleaños</strong></h3>
                            <p><?php echo $persona['FECHA_NACIMIENTO']; ?></p>
                        
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    
                <?php 
                for ($x =0; $x<6;$x++){
                    echo ' <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                <center><span class="label label-success"> <span class="fa fa-heart" aria-hidden="true"></span> ##</span>
                </center>
            </div>   
           '; }?>        
        </div>
    </div>
</div>

                </div>
            </div>
</div>