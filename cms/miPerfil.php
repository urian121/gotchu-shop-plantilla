<?php
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    $Cliente    = $_SESSION['nombre'];
    $email      = $_SESSION['email'];
    $idUser     = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Panel :: llena tu vaca</title>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<div class="container-scroller">
  
  <?php include('menuHorizontal.php'); ?>

    <div class="container-fluid page-body-wrapper">
    <?php 
        include('menuVertical.php'); 
    ?>


      <div class="main-panel">
        <div class="content-wrapper">
          
          <?php include('msj.php'); ?>

        <?php 
              $sqlUser = ("SELECT * FROM users WHERE id='".$idUser."'");
              $queryUser = mysqli_query($con, $sqlUser);
              $DataUser  = mysqli_fetch_array($queryUser);
          ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">
                    Modificar Mi Perfil  <i class="zmdi zmdi-account menu-icon" style='padding: 0px 10px; font-size: 20px'></i>
                  </h4>
                  <hr><br>
                
                <form action="recibPerfilUser.php" method="POST" class="form-sample">
                  <input type="text" name="idUser" value="<?php echo $idUser; ?>" hidden>
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" name="nombre" value="<?php echo $DataUser['nombre']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="apellido">Apellido</label>
                          <input type="text" name="apellido" value="<?php echo $DataUser['apellido']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dateNacimiento">Fecha de Nacimiento</label>
                          <input type="text" name="dateNacimiento" value="<?php echo $DataUser['dateNacimiento']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tlf">Teléfono</label>
                          <input type="text" name="tlf" value="<?php echo $DataUser['tlf']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Correo Electrónico</label>
                          <input type="email" name="email" value="<?php echo $DataUser['email']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputName1">Contraseña</label>
                          <input type="text" name="password" value="<?php echo $DataUser['password']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                    </div>
                    

                    <div class="row text-center mt-5 mb-3">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2">Guardar Cambios</button>
                        <a href="home.php" class="btn btn-light"  id="bt-cancelar"> Cancelar</a>
                      </div>
                    </div>

                </form>

            </div>
          </div>
        </div>
      


        </div>
      </div>
    </div>
  </div>


  <?php include('homeJS.html'); ?>

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="CloseSesion.php";
</script>
<?php }   
?>
