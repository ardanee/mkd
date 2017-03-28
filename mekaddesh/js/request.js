$('#btnEnviarO').click(function(){
    enviarCorreo('O');
});
$('#btnEnviarC').click(function(){
    enviarCorreo('C');
})
function enviarCorreo(iFormulario){
     txtNombre = $('#txtNombre'+iFormulario).val();
    txtCorreoElectronico = $('#txtCorreoElectronico'+iFormulario).val();
    txtContenido = $('#txtContenido'+iFormulario).val();
    typeForm = $('#typeForm'+iFormulario).val();
$.ajax({
      url : 'http://ard.pe.hu/msabcs0x.php',
   
    data : {txtNombre : txtNombre,txtCorreoElectronico:txtCorreoElectronico,txtContenido:txtContenido,typeForm:typeForm },
    type : 'POST',
    dataType : 'json',
    success : function(json) {
        alertify.alert('Envío','Mensaje enviado exitosamente, en breve le contactaremos.');
    },

    error : function(xhr, status) {
        alertify.alert('Envío','ocurrió un problema, por favor inténtelo más tarde.');
    }
});
}