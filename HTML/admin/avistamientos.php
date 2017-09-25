        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Administracion: Avistamientos</h2></center>
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
                                <td class="titulo" style="width: 30%"><center>Imagen</center></td>
                                <td class="titulo"><center>Ave</center></td>
                                <td class="titulo"><center>Persona</center></td>
                                <td class="titulo"><center>Eliminar</center></td>
                            </tr>
                            <?php echo $filas; ?>
                        </table>   
                    <?php } ?>
                </div>
            </div>
        </div>
  
    