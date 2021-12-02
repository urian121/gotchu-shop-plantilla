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

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">
                    Crear mi Vaca <i class="zmdi zmdi-account menu-icon" style='padding: 0px 10px; font-size: 20px'></i>
                  </h4>
                  <hr><br>
                
                <form action="recibCreateCow.php" method="POST" class="form-sample">
                  <input type="text" name="idUser" value="<?php echo $idUser; ?>" hidden>
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nameCow">Nombre de la Vaca</label>
                          <input type="text" name="nameCow" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <label for="nombre">Como sera mi Vaca</label>
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="proposito" id="Compartirconamigos" value="Compartir con amigos" checked>
                              Compartir con amigos
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="proposito" id="Comprarunproducto" value="Comprar un producto" >
                              Comprar un producto
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="proposito" id="Alcancía" value="Alcancía" >
                              Alcancía
                            </label>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                    
                    <div class="row text-center mt-5 mb-3">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2">Crear mi Vaca</button>
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
