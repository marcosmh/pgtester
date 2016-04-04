$(document).ready(function () {

    $('#guardar').click(function () {

        $('#proceso').val('guardar');
        document.forms['frm1'].action = 'ctrl_operaciones.php';
        document.forms['frm1'].submit();

    

 });// FIN GUARDAR


$("#enviar").click(function(){
    
    $('#proceso').val('guardar');
    
    var formulario = $("#frm1").serializeArray();
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "ctrl_operaciones.php",
      data: formulario,
    }).done(function(respuesta){
      //$("#mensaje").html(respuesta.mensaje);
      
      alert(respuesta.mensaje);
      
    });
 });
    


});// FIN JQUERY