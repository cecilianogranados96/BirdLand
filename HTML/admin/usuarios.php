        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Administracion: Usuarios</h2></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="animal-details">
            <div class="container">
                <div class="row">
                    <?php if (isset($mensaje)) {echo $mensaje;} ?>
      
        
                    
                    <!--TABLA -->
                    <?php if(!isset($_GET['edit'])) { ?>
                        <table class="table table-striped" style="background-color: #FFFFFF;">
                            <tr>
                                <td class="titulo"><center>Nombre</center></td>
                                <td class="titulo"><center>Email</center></td>
                                <td class="titulo"><center>Tipo</center></td>
                                <td class="titulo"><center>Editar/Borrar</center></td>
                            </tr>
                            <?php echo $filas; ?>
                        </table>   
                    <?php } ?>
                </div>
            </div>
        </div>
  
    