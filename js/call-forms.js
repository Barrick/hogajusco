$(document).ready(function() {
    $.ajax({
        type: "POST",
        url: "formularios/registrohog.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
    });

    $('#registrohog').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/registrohog.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
   });

   $('#registrorodada').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/registrorodadas.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
   });

     $('#asistencia').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/registroasistencia.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
  });

      $('#editarhog').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/edithog.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
    });

     $('#editarrodada').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/editrodada.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
   });

     $('#consulta').click(function(){
      $.ajax({
        type: "POST",
        url: "formularios/consultaasistencia.php",
        success: function(a) {
                $('#vista-resultado').html(a);
        }
       });
  });

      /*$('#transform').click(function(){
      $.ajax({
        type: "POST",
        url: "hola3.php",
        success: function(a) {
                $('#div-results').html(a);
        }
       });
    }); */

});
