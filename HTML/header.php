<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BirdLand - Un mundo completo que observar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"> 
        <link rel="apple-touch-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="header-top">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="logo-area">
                                <a href="?pag=index">
                                    <img src="images/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <div class="header-top-right">
                                <nav>
                                    <ul> <!--ESTA SECCION PUEDE SERVIR PARA EL PANEL ADMIN-->
                                        <li><a href="?pag=#">Ticket</a></li>
                                        <li><a href="?pag=#">Membership</a></li>
                                        <li><a href="?pag=sponser">Donate</a></li>
                                        <li>
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                          <ul class="dropdown-menu" style="background-color: black">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li>
                                          </ul>
                                        </li>                                        
                                        <li><a href="#" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        <li class="schedule"><a href="?pag=login">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                                        </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="main-header">
                        <nav>
                            <ul>
                                <?php echo $menu; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mobile-menu">
                          <nav id="dropdown">
                            <ul>
                                <?php echo $menu; ?>
                            </ul>
                          </nav>
                        </div>          
                      </div>
                    </div>
                </div>
            </div> 
            
            <div class="search-box-area">
                <div class="container">
                      <div class="row">                          
                          <div class="search-form">
                              <form>
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Busca un ave...">
                                          <a href="?pag=#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>              
            </div>
        </header>