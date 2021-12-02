<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>LLena mi vaca</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <!--Favicon-->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link rel="icon" href="images/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/footer.css">

</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<?php
  include('menu.php');
?>

<!-- banner -->
<section class="section pb-0">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-7 text-center text-lg-left">
        <h1 class="mb-4">Ahora puedes armar tu vaca fácil.</h1>
        <p class="mb-4">
            Solo debes compartir el link con tus <strong>¡Amigos!</strong>
        </p>
      </div>
      <div class="col-lg-4 col-md-4 d-lg-block">
        <img src="images/banner.png" alt="illustration" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<!-- /banner -->


<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-4 text-center d-lg-block">
        <img src="images/cta-illustration.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 col-md-8 text-lg-left text-center">
        <div id="Precargando"> </div>
        <div class="p-5 shadow rounded content createcuentaUser">
          <h2 class="section-title text-center">Crea tu cuenta  <strong style="color: #FF0043;">¡Ahora!</strong> </h2>
          <form method="POST" action="cms/createUser.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
              </div>
              <div class="form-group col-md-6">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="dateNacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="dateNacimiento" required>
              </div>
              <div class="form-group col-md-6">
                <label for="apellido">Teléfono</label>
                <input type="number" class="form-control" name="tlf">
              </div>
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear mi cuenta</button>
            <p class="mt-3">Ya tienes una cuenta <a href="#" id="nuewCuentaUser">Iniciar sesión aqui</a>
              <a href="#" style="float: right;" id="olvideAcceso">¿Olvido su clave?</a>  </p>
          </form>
        </div>

        <!--vista Login -->
        <div class="p-5 shadow rounded content LoginUser" style="display: none;">
          <h2 class="section-title text-center">Iniciar sesión </h2>
          <form method="POST" action="cms/verificarLogin.php">
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar Ahora</button>
            <p class="mt-3"> 
            <a href="#" id="volver">
              <i class="zmdi zmdi-mail-reply zmdi-hc-lg"></i>  Volver 
            </a>
            </p>
          </form>
        </div>
        <!-- Login -->

        <!--olvide accesos -->
        <div class="p-5 shadow rounded content recuperarDatos" style="display: none;">
          <h2 class="section-title text-center">Recuperar mis Datos </h2>
          <form method="POST" action="recibRecuperarClave.php">
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Recuperar ahora</button>
            <p class="mt-3"> 
            <a href="#" id="volverdesdeRecuperar">
              <i class="zmdi zmdi-mail-reply zmdi-hc-lg"></i>  Volver 
            </a>
            </p>
          </form>
        </div>

      </div>
      </div>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 text-lg-left text-center">
        <div class="p-5 shadow rounded content">
          <h2 class="section-title text-center">Calculadora de comisiones</h2>
          <form method="POST" action="#">
            <div class="form-group">
              <label for="email">Valor 1</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="email">Valor 2</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="email">%</label>
              <input type="password" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular comisiones</button>
      
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 text-center d-lg-block">
      <h1 class="">Calcula tus comisiones</h1>
        <p class="">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem minima facere dolorem enim nesciunt perferendis unde, molestias.
        </p>
            <img src="images/calculadora.jpeg" alt="">
      </div>

      </div>
      </div>
    </div>
  </div>
</section>

<!-- topics -->
<section class="section pb-0">
  <div class="container" id="planes">
    <h2 class="section-title">Planes para abrir una cuenta</h2>
    <div class="row">
      <!-- topic -->
      <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <img src="images/1.jpeg" alt="">
            <h3 class="card-title h4 text-center mt-2">GRATIS</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="list.html" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <!-- topic -->
      <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
          <img src="images/2.jpeg" alt="">
            <h3 class="card-title h4 text-center mt-2">PRO</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="list.html" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <!-- topic -->
      <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <img src="images/5.jpeg" alt="">
            <h3 class="card-title h4 text-center mt-2">VIP</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="list.html" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /topics -->


<footer>
      <div class="main-content">
        <div class="left box">
          <h2>Pregunstas frecuentes</h2>
          <div class="content">
            <div class="place">
              - <span class="text">Dudas</span>
            </div>
            <div class="place">
              - <span class="text">Donde esta el dinero</span>
            </div>
            <div class="place">
              - <span class="text">Cuando ahorro</span>
            </div>

            <div class="social">
              <a target="_blank" href="#"><span class="fab fa-facebook-f"></span></a>
              <a target="_blank" href="#"><span class="fab fa-twitter"></span></a>
              <a target="_blank" href="#"><span class="fab fa-instagram"></span></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Como funciona</h2>
          <div class="content">
          <div class="place">
              - <span class="text">Que debo saber</span>
            </div>
            <div class="place">
              - <span class="text">No entiendo</span>
            </div>
            <div class="place">
              - <span class="text">Gane</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Términos y condiciones</h2>
          <div class="content">
            <div class="place">
              - <span class="text">Tratamiento de Datos </span>
            </div>
            <div class="place">
              - <span class="text">Politicas de datos </span>
            </div>
          
          </div>
        </div>

        <div class="center box">
          <h2>Medios de pago</h2>
          <div class="content">
            <ul>
              <li>Davivienda</li>
              <li>Bancolombia</li>
              <li>PayU</li>
              <li>Paypal</li>
            </ul>
          </div>
        </div>

      </div>
      <div class="bottom text-center">
          <span class="credit">Todos los derechos reservados || Copyright © 2021</span>
      </div>
    </footer>


<!-- plugins -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/masonry.min.js"></script>
<script src="plugins/clipboard.min.js"></script>
<script src="plugins/jquery.matchHeight-min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="js/script.js"></script>
<script src="js/miScript.js"></script>


<!-- I AM WEB DEVELOPER ENGINEER URIAN VIERA ---->
<!--- https://blogangular-c7858.web.app --->
<!--- http://mywebsite.rf.gd --->

</body>
</html>