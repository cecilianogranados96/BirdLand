<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Administración: Clase</h2>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="animal-details">
    <div class="container">
        <div class="row">
            <?php if (isset($mensaje)) {echo $mensaje;} ?>
            <!--EDITAR-->
            <?php if(isset($_GET['edit'])) { ?>
            <center>
                <form action="?pag=<?php echo $_GET['pag']; ?>&editar=1&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" style="width: 35%;">
                    <table class="table">
                        <tr>
                            <td colspan="3" class="titulo">
                                <center>
                                    <h2>Editar clase</h2>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre:
                                <input id="textinput" name="nombre" type="text" value="<?php echo $nombre; ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <button type="submit" class="btn btn-lg btn-success">Editar</button>
                                    <a href="?pag=<?php echo $_GET['pag']; ?>&borrar=<?php echo $_GET['id']; ?>" type="button" class="btn btn-lg btn-danger">Borrar</a>
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
            <?php } ?>

            <!--NUEVO-->
            <?php if(!isset($_GET['edit'])) { ?>
            <center>
                <form action='?pag=<?php echo $_GET['pag']; ?>&nuevo=1' method="POST" enctype="multipart/form-data" style="width: 35%;">
                    <table class="table">
                        <tr>
                            <td colspan="3" class="titulo">
                                <center>
                                    <h2>Nueva clase</h2>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="textinput" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <button type="submit" class="btn btn-lg btn-success">Nuevo</button>
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
            <?php } ?>


            <?php if(!isset($_GET['edit'])) { ?>
            <table class="table table-striped" style="background-color: #FFFFFF;" id="table">
                <tr>
                    <td class="titulo">
                        <center>Nombre</center>
                    </td>
                    <td class="titulo">
                        <center>Editar/Borrar</center>
                    </td>
                </tr>
                <?php echo $filas; ?>
            </table>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="container">
                    <ul class="pagination">
                        <?php
                            if($Prev_Page)  
                            {  

                                 echo '<li><a href="?pag='.$_GET['pag'].'&'.$Prev_Page.'#table">»</a></li>';
                            }  

                            for($i=1; $i<=$Num_Pages; $i++){  
                                if($i != $Page)  
                                {  
                                    echo '<li><a href="?pag='.$_GET['pag'].'&Page='.$i.'#table">'.$i.'</a></li>';
                                }  
                                else  
                                {  
                                    echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                                }  
                            } 

                            if($Page!=$Num_Pages)  
                            {  

                                echo '<li><a href="?pag='.$_GET['pag'].'&'.$Next_Page.'#table">»</a></li>';
                            }  
                        ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
