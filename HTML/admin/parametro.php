<div class="breadcumb-area eight">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center>
                    <h2>Administración: parámetros</h2>
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

            <CENTER>
                <form action="?pag=<?php echo $_GET['pag']; ?>&editar=1&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" style="width: 35%;">
                    <table class="table" style="width: 35%;">

                        <tr>
                            <td colspan="3" class="titulo">
                                <center>
                                    <h2>Datos generales</h2>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nombre:
                                <input name="nombre" type="text" value="<?php echo utf8_encode($parametro['NOMBRE']); ?>" class="form-control" disabled>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                Detalle:
                                <textarea type="text" name="des" class="form-control"><?php echo $parametro['DESCRIPCION']; ?></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                                </center>
                            </td>
                        </tr>


                    </table>
                </form>

                <?php } ?>



                <!--TABLA -->
                <?php if (!isset($_GET['edit'])) {?>
                <table class="table table-striped" style="background-color: #FFFFFF;">
                    <tr>
                        <td class="titulo">
                            <center>Nombre</center>
                        </td>
                        <td class="titulo">
                            <center>Valor</center>
                        </td>
                        <td class="titulo">
                            <center>Editar</center>
                        </td>
                    </tr>
                    <?php echo $filas; ?>
                </table>
                <?php } ?>
        </div>
    </div>
</div>
