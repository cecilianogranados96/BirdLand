<?php
##################################################################
# 
# OBJETIVO:
# =========
#
# Reporte de ave en peligro
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
    <script src="http://fabianlindfors.se/multijs/multi.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://fabianlindfors.se/multijs/multi.min.css">
    <div class="breadcumb-area eight">
        <div class="container">
            <div class="row">
                <div class="breadcumb">
                    <center>
                        <h2>Reporte: Aves en peligro</h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="animal-details">
        <div class="container">
            <div class="row">
                <div class="contact-form " style="padding: 0px 0;">
                    <div class="contact">
                        <form action="?pag=<?php echo $_GET['pag']; ?>&b=1" method="POST" enctype="multipart/form-data">
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
                <?php if (!isset($_GET['edit']) and !isset($_GET['cespecie']) ) {?>
                <table class="table table-striped" style="background-color: #FFFFFF;" id="table">
                    <tr>
                        <td class="titulo">
                            <center>Imagen</center>
                        </td>
                        <td class="titulo">
                            <center>Nombre</center>
                        </td>
                        <td class="titulo">
                            <center>Especie</center>
                        </td>
                        <td class="titulo">
                            <center>Color</center>
                        </td>
                        <td class="titulo">
                            <center>Tipo</center>
                        </td>
                        <td class="titulo">
                            <center>Tamaño</center>
                        </td>
                        <td class="titulo">
                            <center>Ficha</center>
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
