<?php
session_start();
include('config.php');
header("Content-Type: text/html;charset=utf-8");
if (isset($_SESSION['email']) != "") {
   $Cliente	= $_SESSION['nombre'];
   $email   = $_SESSION['email'];
   $idUser  = $_SESSION['id']; 
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    iframe {
    margin: 0 auto;
    }
    .amzn-ad-container{
      width: 300px !important;
    }
  </style>
</head>
<body>
  <div class="container-scroller">

    <?php include('menuHorizontal.php'); ?>

    <div class="container-fluid page-body-wrapper">

    <?php 
    //&nbsp;
      include('menuVertical.php'); 

      $sqlProductsAmazon = ("SELECT * FROM produts_amazon");
      $queryProductsAmazon = mysqli_query($con, $sqlProductsAmazon);
    ?>
  

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row flex-grow">
          <div class="col-md-12 text-center mb-5">
            <div class="auth-form-transparent p-3">
            <h2 class="mb-3"><strong style="color: #FF0043;">¡Felicitaciones!</strong> ya puedes elegir tu <strong>Regalo</strong></h2>
              <div class="brand-logo">
                <img src="images/regalo.PNG" alt="logo">
              </div>
            </div>
          </div>
        </div>

      <div id="resp">  </div>

      <div class="row">
        <?php 
          while ($dataProduct = mysqli_fetch_array($queryProductsAmazon)) { ?>
          <div class="col-md-3 grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div style="text-align:center;"> 
                    <?php echo $dataProduct['linkPrdocts']; ?>
                  </div>
                      <div class="template-demo"  id="<?php echo $dataProduct['id']; ?>" data-id="<?php echo $idUser; ?>">
                        <a href="#" id="ModalCreateVaca" class="btn btn-danger btn-rounded btn-fw">Quiero este Regalo</a>
                      </div>
                </div>
              </div>
            </div>
          <?php } ?>
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
    location.href="../index.php";
</script>
<?php }   
?>

