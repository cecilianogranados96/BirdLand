        <div class="breadcumb-area eight">
            <div class="container">
                <div class="row">
                    <div class="breadcumb">
                        <center><h2>Administracion</h2></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="animal-details">
            <div class="container">
                <div class="row">
                      
                    
                    <!--EDITAR-->
                    <?php if(isset($_GET['edit'])) { ?>
                        <center>
                            <form action="" method="post" enctype="multipart/form-data" style="    width: 35%;">
                                <table class="table">
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>Editar clase</h2></center>
                                        </td>
                                  </tr>
                                    <tr>
                                        <td>
                                            <input id="textinput" name="textinput" type="text" placeholder="Nombre" class="form-control"> 
                                        </td>
                                        </tr>
                                    <tr>
                                        <td>
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                                  <option value="1">Clase</option>
                                                  <option value="1">Option one</option>
                                                  <option value="2">Option two</option>
                                            </select>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td> <center>
                                            <button type="button" class="btn btn-lg btn-success">Editar</button>
                                            <a href="?borrar=1" type="button" class="btn btn-lg btn-danger">Borrar</a>
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
                            <form action="" method="post" enctype="multipart/form-data" style="    width: 35%;">
                                <table class="table">
                                    <tr>
                                        <td colspan="3" class="titulo">
                                            <center><h2>Nueva clase</h2></center>
                                        </td>
                                  </tr>
                                    <tr>
                                        <td>
                                            <input id="textinput" name="textinput" type="text" placeholder="Nombre" class="form-control"> 
                                        </td>
                                        </tr>
                                    <tr>
                                        <td>
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                                  <option value="1">Clase</option>
                                                  <option value="1">Option one</option>
                                                  <option value="2">Option two</option>
                                            </select>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td> <center>
                                            <button type="button" class="btn btn-lg btn-success">Nuevo</button>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </center>
                    <?php } ?>
                    
                    
                    
                    
                    
                    <!--TABLA -->
                    <?php if(!isset($_GET['edit'])) { ?>
                        <table class="table table-striped" style="background-color: #FFFFFF;">
                            <tr>
                                <td class="titulo"><center>Nombre</center></td>
                                <td class="titulo"><center>Clase</center></td>
                                <td class="titulo"><center>Editar/Borrar</center></td>
                            </tr>
                            <?php 
                            for ($x =0; $x<6;$x++){
                                echo '<tr>
                                <td><center>
                                    EJE
                                </td>
                                <td><center>CLASE</td>
                                <td><center>
                                      <a href="?pag=admin/clase&edit=1&id=1" class="btn  btn-success">Editar</button>
                                </td>
                              </tr>';
                            }
                            ?> 
                        </table>   
                    <?php } ?>
                </div>
            </div>
        </div>
  
    