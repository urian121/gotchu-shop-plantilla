
//Ventana Modal Olcultar
$(".closeModal, #bt-cancelar").click(function(e){
    e.preventDefault();
   
  $('.modal-container').removeClass('showModal');
  //$('.btn-login').addClass('colordisable');
  });




$(function(){
$(".template-demo").on('click', function(e){
    e.preventDefault();
    var idRegalo = $(this).attr("id");
    var idUser = $(this).attr("data-id");
    //alert($(this).attr("#data-id"));
    

    //$('.modal-container').addClass('showModal'); //Mostar Modal
    $.ajax({url: "createModalVaca.php?idRegalo=" + idRegalo + '&idUser=' + idUser, success: function(result){
      $("#resp").html(result);
    }});
  });
});