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
  min-height:460px;
  overflow: hidden;
  padding:30px;
  margin-bottom:20px;
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
                            <div class="breadcumb">
                                <center><h2>Login</h2></center>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="our-video-content-area">
            <div class="container">
                <div class="row latest-news">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">  <br><br>
                            <h2>Registrese o Ingresa</h2>
                        </div>
                    </div>
                    <section clas="main-container">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-block">
                                      <h2>Registrarse</h2>
                                      <div class="form">
                                        <form action="/action_page.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nombre" name="first-name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Apellido" name="last-name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Usuario" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Contraseña" name="repeat-password" required>
                                            </div>
                                            <button type="submit" class="btn btn-default custom-btn">Enviar</button>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-block">
                                       <h2>Login</h2>
                                       <div class="form">
                                        <form action="/action_page.php">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Usuario" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd">
                                            </div>
                                            <button type="submit" class="btn btn-default custom-btn">Entrar</button>
                                        </form>
                                       </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
</div>