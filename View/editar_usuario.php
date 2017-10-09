<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Edicion de usuarios
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
        .header-content {
            padding: 50px 0;
        }

        .header-title {
            color: #88c724;
            display: block;
            font-size: 48px;
            font-weight: 600;
            line-height: 50px;
            text-transform: uppercase;
        }

        .header-motto {
            color: #88c724;
            font-size: 18px;
            font-weight: 400;
            line-height: 22px;
        }

        .form-block {
            background: #f9f9f9 none repeat scroll 0 0;
            border-radius: 1px;
            box-shadow: 2px 3px 8px #a7a7a7;
            color: gray;
            display: block;
            min-height: 460px;
            overflow: hidden;
            padding: 30px;
            margin-bottom: 20px;
        }

        .form-block h2 {
            border-bottom: 1px solid #88c724;
            color: #88c724;
            display: block;
            font-size: 24px;
            font-weight: 300;
            line-height: 28px;
            margin-bottom: 20px;
            padding-bottom: 8px;
        }

        .form .form-control {
            border-radius: 0;
            color: #999;
            height: 42px;
        }

        .form-control:focus {
            border-color: #88c724;
            box-shadow: none;
        }

        .custom-btn:hover,
        .custom-btn {
            background-color: #88c724;
            border-color: #88c724;
            color: #fff;
            font-size: 20px;
            height: 40px;
            width: 100%;
            font-weight: 500;
        }

    </style>
    <div class="breadcumb-area two twooo">
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
                            <?php echo 'Perfil de '.$nombre_largo; ?>
                        </h2>
                    </div>
                </div>
                <section clas="main-container">
                    <div class="container">
                        <center>
                            <form action="?pag=<?php echo $_GET['pag']; ?>&edit=1<?php echo $url; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-block">

                                        <div class="col-md-4">
                                            <center>
                                                <h2>Personal</h2>
                                            </center>
                                            <div class="form-group">
                                                Nombre:
                                                <input type="text" class="form-control" value="<?php echo $persona['NOMBRE']; ?>" name="nombre" required>
                                            </div>
                                            <div class="form-group">
                                                Apellido:
                                                <input type="text" class="form-control" value="<?php echo $persona['APELLIDO']; ?>" name="apellido" required>
                                            </div>

                                            <div class="form-group">
                                                Email:
                                                <input type="email" class="form-control" value="<?php echo $persona['EMAIL']; ?>" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                Fecha de Nacimiento:
                                                <input type="text" class="form-control" value="<?php echo $persona['FECHA_NACIMIENTO']; ?>" name="fecha" required>
                                            </div>
                                            <div class="form-group">
                                                Profesión:
                                                <input type="text" class="form-control" value="<?php echo $persona['PROFESION']; ?>" name="profesion" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <center>
                                                <h2>Imagen</h2>
                                            </center>


                                            <img src="images/users/<?php echo $persona['FOTO']; ?>" class="img-rounded">
                                            <div class="form-group">
                                                Nueva:
                                                <input type="file" class="form-control" name="foto">
                                            </div>

                                        </div>


                                        <div class="col-md-4">
                                            <center>
                                                <h2>Login</h2>
                                            </center>
                                            <div class="form-group">
                                                Usuario:
                                                <input type="text" class="form-control" value="<?php echo $persona['USUARIO']; ?>" name="user" required>
                                            </div>

                                            <div class="form-group">
                                                Nueva contraseña:
                                                <input type="password" class="form-control" name="pass">
                                            </div>

                                            <div class="form-group" <?php if($_SESSION[ 'tipo'] !=1 ) { echo "style='display:none;'"; } ?> > Tipo:
                                                <select name="tipo" class="form-group">
                                                    <option value="1" <?php if($persona['TIPO'] == 1) { echo "selected"; } ?>>Administrador</option>
                                                    <option value="3" <?php if($persona['TIPO'] == 3) { echo "selected"; } ?>>Usuario</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default custom-btn" style="width: 10%;">Guardar</button>
                            </form>
