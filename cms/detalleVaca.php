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
      include('menuVertical.php'); 
      $idmivaca  = isset($_POST['idmivaca']) ? $_POST['idmivaca'] : $_GET['idmivaca'];
      
      $sqlProductsAmazon = ("SELECT vc .*, pa .* FROM vacas vc, produts_amazon pa WHERE vc.idUser='$idUser' AND pa.id=vc.id_produts_amazon AND idCow='$idmivaca' ");
      $queryProductsAmazon = mysqli_query($con, $sqlProductsAmazon);
    ?>
  

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="row justify-content-md-center">   
        <?php 
            while ($dataVaca = mysqli_fetch_array($queryProductsAmazon)) { ?>    
            <div class="wrapper">
             
                <div class="img imgIframe">
                &nbsp;&nbsp;&nbsp;
                <?php echo $dataVaca['linkPrdocts']; ?>
                    <!--<img src="http://esq.h-cdn.co/assets/15/49/980x504/article-no.jpg" alt="Shoes" />-->
                </div>

                <div class="title">
                    <h1 class="info">Tu vaca se creo correctamente.</h1>
                    <!--<p class="category"><?php //echo $dataVaca['nameCow']; ?></p> -->
                    <p class="price"><?php echo ucfirst($dataVaca['nameCow']); ?>
                        <span>
                            <a href="#" class="btn btn-primary btn-icon-text mb-5" style="float: right;">
                                <i class="zmdi zmdi-share"></i>
                                &nbsp;
                                Compartir
                            </a>
                        </span>
                    </p>
                
                    <p class="description mt-5 border">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti impedit architecto mollitia, saepe ipsam repudiandae nulla porro blanditiis, nesciunt eos a, adipisci non eaque dolores.
                    </p>
                  <!--  <button class="addBtn mt-5 mb-5">Add to cart</button> -->
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

