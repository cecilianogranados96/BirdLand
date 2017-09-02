
<!-- Header End Here -->
<!-- Breadcumb Area Start Here -->
<div class="breadcumb-area two">
    <div class="container">
        <div class="row">
            <div class="breadcumb">
                <center><h2>Estadisticas</h2></center>
            </div>
        </div>
    </div>
</div>


<div class="our-video-content-area">
    <div class="container">
        <div class="row latest-news">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">  <br><br>
                    <h2>Filtro de usuarios</h2>
                </div>
            </div>

                    <div class="contact-form">
                               <div class="container">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="contact">
                                              <form>
                                                <fieldset>
                                                  <div class="col-sm-12">
                                                      
                                                    <div class="form-group">
                                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                                              <option value="1">Clase</option>
                                                              <option value="2">Orden</option>
                                                            <option value="2">SubOrden</option>
                                                            <option value="2">Familia</option>
                                                            <option value="2">Genero</option>
                                                            <option value="2">Especie</option>
                                    </select>
                                                    </div>
                                                  </div>

                                                  <div class="col-sm-12 text-center">
                                                    <div class="form-group">
                                                      <a href="#" class="btn-send">Filtrar</a>
                                                    </div>
                                                  </div>
                                                </fieldset>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                    </div>
            
            
            
            <table class="table table-striped" style="background-color: #FFFFFF;">
                <tr>
                    <td class="titulo"><center>Imagen</center></td>
                    <td class="titulo"><center>Avistamientos</center></td>
                    <td class="titulo"><center>Estado</center></td>
                    <td class="titulo"><center>Detalle</center></td>
                </tr>

                <?php 
                for ($x =0; $x<6;$x++){
                    echo '<tr>
                    <td><center>
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120">
                    </td>
                    <td><center><h2>##</td>
                    <td><center><div class="alert alert-danger" role="alert">
                          Peligro
                        </div>
                        <div class="alert alert-success" role="alert">
                          Ave en conservacion
                        </div>

                        </td>
                    <td><center><a href="?pag=ave-detalle&ave=1" class="btn btn-success">Ficha Tecnica</a></td>
                  </tr>
                  ';
                }
                ?> 
            </table>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="container">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</div>