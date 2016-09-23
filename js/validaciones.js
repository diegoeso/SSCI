var nombreAct = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
var fechaReg=/^(19|20)\d\d-(0\d|1[012])-(0\d|1\d|2\d|3[01])$/;
var fechaIni=/^(19|20)\d\d-(0\d|1[012])-(0\d|1\d|2\d|3[01])$/;
var horaIni= /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
var descripcion= /^[a-zA-Z0-9[:space:]]*$/;
$(document).ready(function(){
	$("#formulario").submit(function(){
		if ($("#nombreAct").val().match(nombreAct)) {
			$("#error_nombre").hide();
		}else {
			$("#error_nombre").show();
		}
		if ($("#fechaReg").val().match(fechaReg)) {
			$("#error_fechaReg").hide();
		}else{
			$("#error_fechaReg").show();
		}
		if ($("#fechaIni").val().match(fechaIni)) {
			$("#error_fechaIni").hide();
		}else{
			$("#error_fechaIni").show();
		}
		if ($("#descripcion").val().match(descripcion)) {
			$("#error_descripcion").hide();
		}else{
			$("#error_descripcion").show();
		}
		return false;
	});
});
