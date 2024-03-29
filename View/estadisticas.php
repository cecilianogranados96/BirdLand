<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Estadisticas
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

    <style>
        body {
            background-color: #ecf0f1;
        }

        .navbar-inverse {
            background-color: #2C3E50;
            border-color: #2C3E50;
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 0px;
            border: 0px solid transparent;
        }

        .navbar-nav>li>a {
            padding-top: 20px;
            padding-bottom: 10px;
            line-height: 20px;
        }

        @media (min-width: 768px) {
            .navbar {
                border-radius: 0px;
            }
        }

        .navbar-brand {
            float: left;
            height: auto;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px;
        }

        .sidebar-toggle {
            color: #fff;
            font-size: 28px;
            display: inline-block;
            padding: 3px 22px;
        }

        @media (min-width:768px) {
            .container-2 {
                width: 100%;
                height: 30%;
                float: left;
            }
        }



        .container-1:after,
        .container-2:before,
            {
            display: table;
            content: " ";
        }

        .container-1:after,
        .container-2:after,
            {
            clear: both;
        }

        .container-1 {
            display: none;
        }

        /*navbar-right=====START==========*/

        .social-icon {
            margin: 0px;
            padding: 0px;
        }

        .social-icon li {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }

        .social-icon li a {
            display: block;
            padding: 15px 14px;
            text-decoration: none;
        }

        .social-icon li a:focus {
            color: #fff;
            text-decoration: none;
        }

        .messages-link {
            color: #fff !important;
            background: #16a085 !important;

        }

        .alerts-link {
            color: #fff !important;
            background: #f39c12 !important;

        }

        .tasks-link {
            color: #fff !important;
            background: #2980b9 !important;

        }

        .user-link {
            color: #fff !important;
            background: #E74C3C !important;

        }

        .number {
            position: absolute;
            bottom: 25px;
            left: 3px;
            width: 20px;
            height: 20px;
            padding-right: 1px;
            border-radius: 50%;
            text-align: center;
            font-size: 11px;
            line-height: 20px;
            background-color: #2c3e50;
        }


        /*navbar-right=======END========*/

        /*sidebar-toggle=============*/

        .sidebar-toggle:hover,
        .sidebar-toggle:focus {
            color: #fff;
            text-decoration: underline;
        }


        /*sidr-NAVBAR=======START========*/

        .navbar-nav-1 {
            width: 100%;
            background-color: #34495E;
            height: auto;
            overflow: hidden;
            z-index: 1020;
            position: relative;
        }

        .side-user {
            display: block;
            width: 100%;
            padding: 15px;
            border-top: none !important;
            border-bottom: 1px solid #142638;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            z-index: 99;
            color: #fff;
            font-size: 31px;
            top: 0px;
            left: 223px;
            display: none;
            padding: 0px;
            cursor: pointer;
        }

        .close-btn .fa-window-close {
            color: #fff;
            font-size: 25px;
        }

        .welcome {
            margin: 0;
            font-style: italic;
            color: #9aa4af;
        }

        .name {
            margin: 0;
            font-family: "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-weight: 300;
            color: #ccd1d7;
        }

        .side-user a {
            color: #fff;
        }

        .nav-search {
            border-top: 1px solid #54677a;
        }

        .nav-search .form-control {
            border: 1px solid #000;
            border-radius: 0px;
        }

        .nav-search .btn {
            border: 1px solid #000;
            border-radius: 0px;
        }

        .dashboard>a {
            color: #fff;
        }

        .side-nav li {
            border-top: 1px solid #54677a;
            border-bottom: 1px solid #142638;
        }

        .side-nav>li>a:active {
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
            outline: none;
            color: #fff;
            background-color: #34495e;
        }

        .panel {
            margin-bottom: 0;
            border: none;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
        }

        .panel>a {
            position: relative;
            display: block;
            padding: 10px 15px;
            color: #fff;
        }

        .panel>ul>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
            color: darkcyan;
            background: black;
        }

        .nav>li>a:hover,
        .nav>li>a:focus {
            text-decoration: none;
            background-color: #3d566e;
        }

        /*sidr-NAVBAR=======END========*/

        @media (min-width: 768px) {

            #page-wrapper {

                padding: 0 30px;
                min-height: 1300px;
                border-left: 1px solid #2c3e50;
            }
        }

        #page-wrapper {
            padding: 0 15px;
            border: none;

        }

        .date-picker {
            border-color: #138871;
            color: #fff;
            background-color: #149077;
            margin-top: -7px;
            border-radius: 0px;
            margin-right: -15px;
        }

        #page-wrapper .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;
            background-color: #e0e7e8;
            border-radius: 0px;

        }

        @media (min-width: 768px) {
            .circle-tile {
                margin-bottom: 30px;
            }
        }

        .circle-tile {
            margin-bottom: 15px;
            text-align: center;
        }

        .circle-tile-heading {
            position: relative;
            width: 80px;
            height: 80px;
            margin: 0 auto -40px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 100%;
            color: #fff;
            transition: all ease-in-out .3s;
        }


        .dark-blue {
            background-color: #34495e;
        }

        .green {
            background-color: #16a085;
        }

        .blue {
            background-color: #2980b9;
        }

        .orange {
            background-color: #f39c12;
        }

        .red {
            background-color: #e74c3c;
        }

        .purple {
            background-color: #8e44ad;
        }

        .dark-gray {
            background-color: #7f8c8d;
        }

        .gray {
            background-color: #95a5a6;
        }

        .light-gray {
            background-color: #bdc3c7;
        }

        .yellow {
            background-color: #f1c40f;
        }

        /* -- Text Color Helper Classes */

        .text-dark-blue {
            color: #34495e;
        }

        .text-green {
            color: #16a085;
        }

        .text-blue {
            color: #2980b9;
        }

        .text-orange {
            color: #f39c12;
        }

        .text-red {
            color: #e74c3c;
        }

        .text-purple {
            color: #8e44ad;
        }

        .text-faded {
            color: rgba(255, 255, 255, 0.7);
        }



        .circle-tile-heading .fa {
            line-height: 80px;
        }

        .circle-tile-content {
            padding-top: 50px;
        }

        .circle-tile-description {
            text-transform: uppercase;
        }

        .text-faded {
            color: rgba(255, 255, 255, 0.7);
        }

        .circle-tile-number {
            padding: 5px 0 15px;
            font-size: 26px;
            font-weight: 700;
            line-height: 1;
        }

        .circle-tile-footer {
            display: block;
            padding: 5px;
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(0, 0, 0, 0.1);
            transition: all ease-in-out .3s;
        }

        .circle-tile-footer:hover {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(0, 0, 0, 0.2);
        }


        .morning {
            background: url(https://lh3.googleusercontent.com/-1YbV7nsVnX8/WMugaq-6BEI/AAAAAAAADSg/0wPfQ84vMUcCle_SkgiUDOumUKscMaA8QCL0B/w530-d-h353-p-rw/widget-bg-morning.jpg) center bottom no-repeat;
            background-size: cover;
        }

        .time-widget {
            margin-top: 5px;
            overflow: hidden;
            text-align: center;
            font-size: 1.75em;
        }

        .time-widget-heading {
            text-transform: uppercase;
            font-size: .5em;
            font-weight: 400;
            color: #fff;
        }

        #datetime {
            color: #fff;
        }

        .tile-img {
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
        }

        .tile {
            margin-bottom: 15px;
            padding: 15px;
            overflow: hidden;
            color: #fff;
        }

    </style>
    <div class="breadcumb-area two"></div>
    <div class="our-video-content-area">
        <div class="container">
            <div class="row latest-news">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title"> <br><br>
                        <h2>Estadísticas</h2>
                        <div id="reportrange" class="btn btn-green btn-square date-picker" style="margin-top: -4%;">
                            <span class="date-range"><i class="fa fa-calendar"></i> <?php echo $fecha; ?></span>
                        </div>
                    </div>
                </div>
                <div class="container-2" style="margin-top: 5%;">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue">
                                        <i class="fa fa-globe fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded">
                                        Ubicaciones
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $ubicaciones; ?>
                                        <span id="sparklineA"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-eye fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-description text-faded">
                                        Avistamientos
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $avistamientos; ?>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-paper-plane fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-description text-faded">
                                        Aves
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $aves; ?>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading blue">
                                        <i class="fa fa-users fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content blue">
                                    <div class="circle-tile-description text-faded">
                                        Usuarios
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $usuarios; ?>
                                        <span id="sparklineB"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading red">
                                        <i class="fa fa-paw fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content red">
                                    <div class="circle-tile-description text-faded">
                                        Especies
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $especies; ?>
                                        <span id="sparklineC"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading purple">
                                        <i class="fa fa-angellist fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content purple">
                                    <div class="circle-tile-description text-faded">
                                        Likes
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        <?php echo $likes; ?>
                                        <span id="sparklineD"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer"><i class="fa fa-trophy"></i> BirdLand <i class="fa fa-trophy"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
