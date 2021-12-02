
$(function(){
    //Precarga de la pagina se ejecuta solo una vez
    setTimeout(
        ()=>{
            $(".cargando").hide(); 
         } , 100
     );
/*
	$('#search-by').keyup(function () {
		if (this.value) {
			$(this).addClass('active')
		} else {
			$(this).removeClass('active')
		}
	});
    */
   /*
   	// Preloader js     
	$(window).on('load', function () {
		$('.preloader').fadeOut(100);
	});
    */

    $("#nuewCuentaUser").on('click', function(e){
        e.preventDefault();

        $(".createcuentaUser").hide(); //Ocultar
        $('#Precargando').html('<center><img src="images/loader.gif" style="left:50%; right: 50%; margin-top: 15%; width:200px;"/></center>');
     
        setTimeout(
            ()=>{
                $("#Precargando").hide(100); 
                $(".LoginUser").show(100);  //mostrar   
             } , 1000
         );
    });

    $("#volver").on('click', function(e){
        e.preventDefault();

        $("#Precargando").show(); 
        $(".LoginUser").hide();
        $('#Precargando').html('<center><img src="images/loader.gif" style="left:50%; right: 50%; margin-top: 15%; width:200px;"/></center>'); 
        
        setTimeout(
            ()=>{
                $("#Precargando").hide(); 
                $(".createcuentaUser").fadeIn(100);
             } , 500
         );
        
    });

    $("#volverdesdeRecuperar").on('click', function(e){
        e.preventDefault();
        $(".recuperarDatos").hide();
        $("#Precargando").show(); 
        $(".LoginUser").hide();

        $('#Precargando').html('<center><img src="images/loader.gif" style="left:50%; right: 50%; margin-top: 15%; width:200px;"/></center>'); 
        setTimeout(
            ()=>{
                $("#Precargando").hide(); 
                $(".createcuentaUser").fadeIn(100);
             } , 500
         );
        
    });

    $("#olvideAcceso").on('click', function(e){
        e.preventDefault();
        $("#Precargando").show(); 
        $(".createcuentaUser").hide();
        $('#Precargando').html('<center><img src="images/loader.gif" style="left:50%; right: 50%; margin-top: 15%; width:200px;"/></center>'); 
        setTimeout(
            ()=>{
                $("#Precargando").hide(); 
                $(".recuperarDatos").fadeIn(100);
             } , 500
         );
        
    });


});


/****Navegacion con SCROLL */
$(function(){
    $('#LoginUser').on('click', function (e){
        e.preventDefault();
        $("#createCuentaLogin").hide();
        $("#capaLoginUser").show();
    });

    $('#volver').on('click', function (e){
        e.preventDefault();
        $("#capaLoginUser").hide();
        $("#createCuentaLogin").fadeIn(50);
    })


    $("#detectascroll").on("click", function () {
        var sv = $(document).scrollTop();
        //scroll horizontal
        var sh = $(document).scrollLeft();
        $(this).find("span").text("(" + sh + "," + sv+ ")");
    });
    $("#scrollelemento").on("click", function () {
        var boton = $(this);
        var elemento = boton.parent();
        //scroll vertical
        var sv = elemento.scrollTop();
        //scroll horizontal
        var sh = elemento.scrollLeft();
        boton.find("span").text("(" + sh + "," + sv+ ")");
    });
    
    $("#cuentaUser").on("click", function(){
        var posicion = $(".createcuentaUser").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#login").on("click", function(){
        var posicion = $(".createcuentaUser").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#planesTarifas").on("click", function(){
        var posicion = $("#planes").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#ayuda,  #contacto").on("click", function(){
        var posicion = $(".main-content").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });


    $(document).on("scroll", function(){
        var desplazamientoActual = $(document).scrollTop();
        var controlArriba = $("#irarriba");
        if(desplazamientoActual > 100 && controlArriba.css("display") == "none"){
            controlArriba.fadeIn(500);
        }
        if(desplazamientoActual < 100 && controlArriba.css("display") == "block"){
            controlArriba.fadeOut(500);
        }
    });
    $("#irarriba a").on("click", function(e){
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000); 
    });
});