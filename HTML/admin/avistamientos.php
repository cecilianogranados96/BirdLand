<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Administracion: Avistamientos</h2>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="animal-details">
    <div class="container">
        <div class="row">
            <?php if (isset($mensaje)) {echo $mensaje;} ?>


            <div class="contact-form " style="padding: 0px 0;">
                <div class="contact">
                    <form action="?pag=<?php echo $_GET['pag']; ?>&b=1" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="busqueda" class="form-control" placeholder="Busque cualquier campo" required>
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
            <!--TABLA -->
            <?php if(!isset($_GET['edit'])) { ?>
            <table class="table table-striped" style="background-color: #FFFFFF;" id="table">
                <tr>
                    <td class="titulo" style="width: 30%">
                        <center>Imagen</center>
                    </td>
                    <td class="titulo">
                        <center>Ave</center>
                    </td>
                    <td class="titulo">
                        <center>Persona</center>
                    </td>
                    <td class="titulo">
                        <center>Eliminar</center>
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
