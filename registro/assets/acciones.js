$(document).ready(function(){

    $("#btn-close").click(function(){
      $("h1").hide();
      $(this).hide();
    });

    $("#btn-close").click(function(){
      $("p").hide();
      $(this).hide();
    });

    $(".community").click(function(){
        $(".desplegable").toggle();
      });

/*      $(".sign").click(function(){
        $("#formulario").slideToggle("slow");
      });

      $("#").click(function(){
        $("#formulario").slideToggle("slow");
      });
*/
      $(".nav-links").click(function(){
        $("#formulario").slideToggle("slow");
      });

    var imagen= $(".integracion");
    var explicacion = $(".explicacion");

    imagen.hover(function(){
      explicacion.slideToggle();
      console.log("entra");
    })

    var imagen1= $(".integracion1");
    var explicacion1 = $(".explicacion1");

    imagen1.hover(function(){
      explicacion1.slideToggle();
      console.log("entra");
    })

    var imagen2= $(".integracion2");
    var explicacion2 = $(".explicacion2");

    imagen2.hover(function(){
      explicacion2.slideToggle();
      console.log("entra");
    })

    var imagen3= $(".integracion3");
    var explicacion3 = $(".explicacion3");

    imagen3.hover(function(){
      explicacion3.slideToggle();
      console.log("entra");
    })

    var imagen4= $(".integracion4");
    var explicacion4 = $(".explicacion4");

    imagen4.hover(function(){
      explicacion4.slideToggle();
      console.log("entra");
    })

    var imagen5= $(".integracion5");
    var explicacion5 = $(".explicacion5");

    imagen5.hover(function(){
      explicacion5.slideToggle();
      console.log("entra");
    })


      var texto = $(".texto");
      var circulo = $(".circulo");
      var link = $(".link");

      texto.mouseenter(function(){
      console.log("entra");
      circulo.toggleClass("circuloh");
      texto.toggleClass("textoh");
})
 


  });
