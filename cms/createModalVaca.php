
<!--- form mpodal para registrar mi vaca --->
<div id="modal_container" class="modal-container showModal">
    <div class="modalPersonalizada" style="width: 450px !important;">
    <a href="#close" title="Close" class="closeModal" id="closeModal">X</a>
      <p style="color: #ec001a; font-size:22px">
        <h3>¡Crear mi  <strong style="color:#FF0043">vaca</strong>!</h3> <hr>
      </p>
          <form action="createVacaDesdeModal.php" method="POST" class="form-sample">
              <input type="text" name="idUser" value="<?php echo $_REQUEST['idUser'];?>" hidden>
              <input type="text" name="id_produts_amazon" id="id_produts_amazon" value="<?php echo $_REQUEST['idRegalo']; ?>" hidden>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nombre" style="float: left;"><strong>¿Cual sera el nombre de tu vaca?</strong></label>
                      <input type="text" name="nameCow" class="form-control" require="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="dateCreateCow" style="float: left;"><strong>Fecha incio de mi vaca </strong></label>
                      <input type="date" name="dateCreateCow" value="<?php echo date('Y-m-d') ;?>" class="form-control" require="true"/>
                    </div>
                  </div>
                </div>
                <div class="row text-center mt-5 mb-3">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2">Crear mi vaca</button>
                    <a href="home.php" class="btn btn-light"  id="bt-cancelar"> Cancelar</a>
                  </div>
                </div>
            </form>
        </div>
      </div>
    <!--- fin modalCreateModal -->

    <script src="js/miScript.js"></script>