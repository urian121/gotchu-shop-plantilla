
<?php
/**Msj sc: sesion iniciada correctamente ***/
if(isset($_REQUEST['sc'])){ ?>
<div class="row sc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        Ha iniciado la sesión correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj csc: msj de cerrar sesion correctamente***/
if(isset($_REQUEST['csc'])){ ?>
<div class="row csc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        La sesión se ha cerrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj dui: datos del usurio incorrectos ***/
if(isset($_REQUEST['dui'])){ ?>
<div class="row dui" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Oh !</strong>
        Algunos datos son incorrectos.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>





<?php
/**Msj Datos del Usuario en session Actualizados du= datos user***/
if(isset($_REQUEST['du'])){ ?>
<div class="row du" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	Sus datos personales fuerón actualizados con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj de Categoria Registrada Correctamente***/
if(isset($_REQUEST['ct'])){ ?>
<div class="row ct" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	La Categoria fue registrada con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<?php
/**Msj de Etiqueta Registrada Correctamente***/
if(isset($_REQUEST['et'])){ ?>
<div class="row et" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	La Etiqueta fue registrada con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj de Producto Registrado Correctamente***/
if(isset($_REQUEST['pr'])){ ?>
<div class="row pr" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El Producto fue registrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj de Borrar Categoria Correctamente***/
if(isset($_REQUEST['dc'])){ ?>
<div class="row dc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	La Categoria fue Eliminada correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj de Borrar Etiqueta Correctamente***/
if(isset($_REQUEST['de'])){ ?>
<div class="row de" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	La Etiqueta fue Eliminada correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<?php
/**Msj borrar procto dpf***/
if(isset($_REQUEST['dpf'])){ ?>
<div class="row dpf" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El Producto fue eliminado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<?php
/**Msj Producto actualizado Correctamente***/
if(isset($_REQUEST['pa'])){ ?>
<div class="row pa" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Producto fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>




<!------------------->
<!------------------->
<!-----Cambiando Logo tipo lt: logotipo---------->
<?php if(isset($_REQUEST['lt'])){ ?>
<div class="row lt" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Logotipo fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----Cambiando banner  b1: banner1---------->
<?php if(isset($_REQUEST['b1'])){ ?>
<div class="row b1" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Banner 1 fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!-----Cambiando banner  b2: banner2---------->
<?php if(isset($_REQUEST['b2'])){ ?>
<div class="row b2" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Banner 2 fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----msj de liga redes actualizada lrs---------->
<?php if(isset($_REQUEST['lrs'])){ ?>
<div class="row lrs" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        La liga de Redes fue actualizada con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----msj de menu actualizado mu---------->
<?php if(isset($_REQUEST['mu'])){ ?>
<div class="row mu" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        Tú Menu fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----msj de Info de actualizada de mi Negocio in---------->
<?php if(isset($_REQUEST['in'])){ ?>
<div class="row in" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        La información de tu negocio fue actualizada con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!-------msj el correo ya existe cuando se intente registrar :cex=correo existe------------>
<?php if(isset($_REQUEST['cex'])){ ?>
<div class="row cex" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Oh !</strong>
        El Correo ya Existe, por favor verfique o intente con otro Correo.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!---msj scta: estatus de la categoria actualizado ----->
<?php if(isset($_REQUEST['scta'])){ ?>
<div class="row scta" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El estatus de la Categoria fue cambiado exitosamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!------------------vbc mjs video borado corretamente ---->
<?php if(isset($_REQUEST['vbc'])){ ?>
<div class="row vbc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El video fue borrado exitosamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!--msj que los datos del cliente fueron actualizados, desde el nivel administrador -->
<?php if(isset($_REQUEST['dacad'])){ ?>
<div class="row dacad" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        Los Datos del Cliente fuerón actualizados.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>




<?php if(isset($_REQUEST['ng'])){ ?>
<div class="row ng" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Groomer fue registrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>