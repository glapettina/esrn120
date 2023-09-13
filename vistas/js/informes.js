

/*=============================================
EDITAR INFORME CIENTIFICA
=============================================*/

$(".tablas").on("click", ".btnEditarInformeCientifica", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesCientifica").val(respuesta["saberes_cientifica"]);
			$("#apreciaCientifica").val(respuesta["aprecia_cientifica"]);
			$("#asistenciaCientifica").val(respuesta["asistencia_cientifica"]);
			$("#observaCientifica").val(respuesta["observa_cientifica"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME SOCIALES
=============================================*/

$(".tablas").on("click", ".btnEditarInformeSociales", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesSociales").val(respuesta["saberes_sociales"]);
			$("#apreciaSociales").val(respuesta["aprecia_sociales"]);
			$("#asistenciaSociales").val(respuesta["asistencia_sociales"]);
			$("#observaSociales").val(respuesta["observa_sociales"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME LENGUA
=============================================*/

$(".tablas").on("click", ".btnEditarInformeLengua", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesLengua").val(respuesta["saberes_lengua"]);
			$("#apreciaLengua").val(respuesta["aprecia_lengua"]);
			$("#asistenciaLengua").val(respuesta["asistencia_lengua"]);
			$("#observaLengua").val(respuesta["observa_lengua"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME MATEMATICA
=============================================*/

$(".tablas").on("click", ".btnEditarInformeMatematica", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesMatematica").val(respuesta["saberes_matematica"]);
			$("#apreciaMatematica").val(respuesta["aprecia_matematica"]);
			$("#asistenciaMatematica").val(respuesta["asistencia_matematica"]);
			$("#observaMatematica").val(respuesta["observa_matematica"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME INGLES
=============================================*/

$(".tablas").on("click", ".btnEditarInformeIngles", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesIngles").val(respuesta["saberes_ingles"]);
			$("#apreciaIngles").val(respuesta["aprecia_ingles"]);
			$("#asistenciaIngles").val(respuesta["asistencia_ingles"]);
			$("#observaIngles").val(respuesta["observa_ingles"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME EDUCACIÓN FISICA
=============================================*/

$(".tablas").on("click", ".btnEditarInformeFisica", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesFisica").val(respuesta["saberes_fisica"]);
			$("#apreciaFisica").val(respuesta["aprecia_fisica"]);
			$("#asistenciaFisica").val(respuesta["asistencia_fisica"]);
			$("#observaFisica").val(respuesta["observa_fisica"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME EDUCACIÓN ARTÍSTICA
=============================================*/

$(".tablas").on("click", ".btnEditarInformeArtistica", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesArtistica").val(respuesta["saberes_artistica"]);
			$("#apreciaArtistica").val(respuesta["aprecia_artistica"]);
			$("#asistenciaArtistica").val(respuesta["asistencia_artistica"]);
			$("#observaArtistica").val(respuesta["observa_artistica"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME EVE
=============================================*/

$(".tablas").on("click", ".btnEditarInformeEve", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesEve").val(respuesta["saberes_eve"]);
			$("#apreciaEve").val(respuesta["aprecia_eve"]);
			$("#asistenciaEve").val(respuesta["asistencia_eve"]);
			$("#observaEve").val(respuesta["observa_eve"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PRINCIPIO 3
=============================================*/

$(".tablas").on("click", ".btnEditarInformePrincipio3", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesPrincipio").val(respuesta["saberes_principio3"]);
			$("#apreciaPrincipio").val(respuesta["aprecia_principio3"]);
			$("#asistenciaPrincipio").val(respuesta["asistencia_principio3"]);
			$("#observaPrincipio").val(respuesta["observa_principio3"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME ECONOMIA 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeEconomia", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesEconomia").val(respuesta["saberes_economia"]);
			$("#apreciaEconomia").val(respuesta["aprecia_economia"]);
			$("#asistenciaEconomia").val(respuesta["asistencia_economia"]);
			$("#observaEconomia").val(respuesta["observa_economia"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PRINCIPIO 4
=============================================*/

$(".tablas").on("click", ".btnEditarInformePrincipio4", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesPrincipio").val(respuesta["saberes_principio4"]);
			$("#apreciaPrincipio").val(respuesta["aprecia_principio4"]);
			$("#asistenciaPrincipio").val(respuesta["asistencia_principio4"]);
			$("#observaPrincipio").val(respuesta["observa_principio4"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PYMES 4
=============================================*/

$(".tablas").on("click", ".btnEditarInformePymes4", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesPymes").val(respuesta["saberes_pymes4"]);
			$("#apreciaPymes").val(respuesta["aprecia_pymes4"]);
			$("#asistenciaPymes").val(respuesta["asistencia_pymes4"]);
			$("#observaPymes").val(respuesta["observa_pymes4"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PYMES 5
=============================================*/

$(".tablas").on("click", ".btnEditarInformePymes5", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesPymes").val(respuesta["saberes_pymes5"]);
			$("#apreciaPymes").val(respuesta["aprecia_pymes5"]);
			$("#asistenciaPymes").val(respuesta["asistencia_pymes5"]);
			$("#observaPymes").val(respuesta["observa_pymes5"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PROBLEMATICAS
=============================================*/

$(".tablas").on("click", ".btnEditarInformeProblematicas", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesProblematicas").val(respuesta["saberes_problematicas"]);
			$("#apreciaProblematicas").val(respuesta["aprecia_problematicas"]);
			$("#asistenciaProblematicas").val(respuesta["asistencia_problematicas"]);
			$("#observaProblematicas").val(respuesta["observa_problematicas"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME TALLER
=============================================*/

$(".tablas").on("click", ".btnEditarInformeTaller", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesTaller").val(respuesta["saberes_taller"]);
			$("#apreciaTaller").val(respuesta["aprecia_taller"]);
			$("#asistenciaTaller").val(respuesta["asistencia_taller"]);
			$("#observaTaller").val(respuesta["observa_taller"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME MOTRICIDAD
=============================================*/

$(".tablas").on("click", ".btnEditarInformeMotricidad", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesMotricidad").val(respuesta["saberes_motricidad"]);
			$("#apreciaMotricidad").val(respuesta["aprecia_motricidad"]);
			$("#asistenciaMotricidad").val(respuesta["asistencia_motricidad"]);
			$("#observaMotricidad").val(respuesta["observa_motricidad"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME CULTURAS
=============================================*/

$(".tablas").on("click", ".btnEditarInformeCulturas", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesCulturas").val(respuesta["saberes_culturas"]);
			$("#apreciaCulturas").val(respuesta["aprecia_culturas"]);
			$("#asistenciaCulturas").val(respuesta["asistencia_culturas"]);
			$("#observaCulturas").val(respuesta["observa_culturas"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME DEPORTIVAS 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeDeportivas", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesDeportivas").val(respuesta["saberes_deportivas"]);
			$("#apreciaDeportivas").val(respuesta["aprecia_deportivas"]);
			$("#asistenciaDeportivas").val(respuesta["asistencia_deportivas"]);
			$("#observaDeportivas").val(respuesta["observa_deportivas"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME CORPORALES 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeCorporales", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesCorporales").val(respuesta["saberes_corporales"]);
			$("#apreciaCorporales").val(respuesta["aprecia_corporales"]);
			$("#asistenciaCorporales").val(respuesta["asistencia_corporales"]);
			$("#observaCorporales").val(respuesta["observa_corporales"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME INTERVENCION 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeIntervencion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesIntervencion").val(respuesta["saberes_intervencion"]);
			$("#apreciaIntervencion").val(respuesta["aprecia_intervencion"]);
			$("#asistenciaIntervencion").val(respuesta["asistencia_intervencion"]);
			$("#observaIntervencion").val(respuesta["observa_intervencion"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME AMBIENTE 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeAmbiente", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesAmbiente").val(respuesta["saberes_ambiente"]);
			$("#apreciaAmbiente").val(respuesta["aprecia_ambiente"]);
			$("#asistenciaAmbiente").val(respuesta["asistencia_ambiente"]);
			$("#observaAmbiente").val(respuesta["observa_ambiente"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME NATACION 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeNatacion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesNatacion").val(respuesta["saberes_natacion"]);
			$("#apreciaNatacion").val(respuesta["aprecia_natacion"]);
			$("#asistenciaNatacion").val(respuesta["asistencia_natacion"]);
			$("#observaNatacion").val(respuesta["observa_natacion"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME PROYECTOS 
=============================================*/

$(".tablas").on("click", ".btnEditarInformeProyectos", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesProyectos").val(respuesta["saberes_proyectos"]);
			$("#apreciaProyectos").val(respuesta["aprecia_proyectos"]);
			$("#asistenciaProyectos").val(respuesta["asistencia_proyectos"]);
			$("#observaProyectos").val(respuesta["observa_proyectos"]);			


								
		}
	})

	
})



/*=============================================
EDITAR INFORME INTRODUCCION
=============================================*/

$(".tablas").on("click", ".btnEditarInformeIntroduccion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesIntroduccion").val(respuesta["saberes_introduccion"]);
			$("#apreciaIntroduccion").val(respuesta["aprecia_introduccion"]);
			$("#asistenciaIntroduccion").val(respuesta["asistencia_introduccion"]);
			$("#observaIntroduccion").val(respuesta["observa_introduccion"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME AMBIENTE
=============================================*/

$(".tablas").on("click", ".btnEditarInformeAmbiente", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesAmbiente").val(respuesta["saberes_ambiente"]);
			$("#apreciaAmbiente").val(respuesta["aprecia_ambiente"]);
			$("#asistenciaAmbiente").val(respuesta["asistencia_ambiente"]);
			$("#observaAmbiente").val(respuesta["observa_ambiente"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME GENERACION (TURISMO)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeGeneracion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);
	datos.append("periodo", periodo);	


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesGeneracion").val(respuesta["saberes_generacion"]);
			$("#apreciaGeneracion").val(respuesta["aprecia_generacion"]);
			$("#asistenciaGeneracion").val(respuesta["asistencia_generacion"]);
			$("#observaGeneracion").val(respuesta["observa_generacion"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME PRODUCCION (TURISMO)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeProduccion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesProduccion").val(respuesta["saberes_produccion"]);
			$("#apreciaProduccion").val(respuesta["aprecia_produccion"]);
			$("#asistenciaProduccion").val(respuesta["asistencia_produccion"]);
			$("#observaProduccion").val(respuesta["observa_produccion"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME COMUNICACION (TURISMO)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeComunicacion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);	


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesComunicacion").val(respuesta["saberes_comunicacion"]);
			$("#apreciaComunicacion").val(respuesta["aprecia_comunicacion"]);
			$("#asistenciaComunicacion").val(respuesta["asistencia_comunicacion"]);
			$("#observaComunicacion").val(respuesta["observa_comunicacion"]);			


								
		}
	})

	
})

/*=============================================
EDITAR INFORME PROYECTO (TURISMO)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeProyecto", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesProyecto").val(respuesta["saberes_proyecto"]);
			$("#apreciaProyecto").val(respuesta["aprecia_proyecto"]);
			$("#asistenciaProyecto").val(respuesta["asistencia_proyecto"]);
			$("#observaProyecto").val(respuesta["observa_proyecto"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME TALLER (TURISMO)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeTaller", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesTaller").val(respuesta["saberes_taller"]);
			$("#apreciaTaller").val(respuesta["aprecia_taller"]);
			$("#asistenciaTaller").val(respuesta["asistencia_taller"]);
			$("#observaTaller").val(respuesta["observa_taller"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME APRECIACION (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeApreciacion", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesApreciacion").val(respuesta["saberes_apreciacion"]);
			$("#apreciaApreciacion").val(respuesta["aprecia_apreciacion"]);
			$("#asistenciaApreciacion").val(respuesta["asistencia_apreciacion"]);
			$("#observaApreciacion").val(respuesta["observa_apreciacion"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME LENGUAJE 3
=============================================*/

$(".tablas").on("click", ".btnEditarInformeLenguaje3", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesLenguaje3").val(respuesta["saberes_lenguaje3"]);
			$("#apreciaLenguaje3").val(respuesta["aprecia_lenguaje3"]);
			$("#asistenciaLenguaje3").val(respuesta["asistencia_lenguaje3"]);
			$("#observaLenguaje3").val(respuesta["observa_lenguaje3"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME LENGUAJE 4 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeLenguaje4", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesLenguaje4").val(respuesta["saberes_lenguaje4"]);
			$("#apreciaLenguaje4").val(respuesta["aprecia_lenguaje4"]);
			$("#asistenciaLenguaje4").val(respuesta["asistencia_lenguaje4"]);
			$("#observaLenguaje4").val(respuesta["observa_lenguaje4"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME CONJUNTO 4 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeConjunto4", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesConjunto4").val(respuesta["saberes_conjunto4"]);
			$("#apreciaConjunto4").val(respuesta["aprecia_conjunto4"]);
			$("#asistenciaConjunto4").val(respuesta["asistencia_conjunto4"]);
			$("#observaConjunto4").val(respuesta["observa_conjunto4"]);			


								
		}
	})

	
})


/*=============================================
EDITAR INFORME VOCAL 4 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeVocal4", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesVocal4").val(respuesta["saberes_vocal4"]);
			$("#apreciaVocal4").val(respuesta["aprecia_vocal4"]);
			$("#asistenciaVocal4").val(respuesta["asistencia_vocal4"]);
			$("#observaVocal4").val(respuesta["observa_vocal4"]);			


								
		}
	})

	
})

/*=============================================
EDITAR LENGUAJE 5 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeLenguaje5", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);
	datos.append("periodo", periodo);	


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesLenguaje5").val(respuesta["saberes_lenguaje5"]);
			$("#apreciaLenguaje5").val(respuesta["aprecia_lenguaje5"]);
			$("#asistenciaLenguaje5").val(respuesta["asistencia_lenguaje5"]);
			$("#observaLenguaje5").val(respuesta["observa_lenguaje5"]);			


								
		}
	})

	
})


/*=============================================
EDITAR MUSICA (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeMusica", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesMusica").val(respuesta["saberes_musica"]);
			$("#apreciaMusica").val(respuesta["aprecia_musica"]);
			$("#asistenciaMusica").val(respuesta["asistencia_musica"]);
			$("#observaMusica").val(respuesta["observa_musica"]);			


								
		}
	})

	
})


/*=============================================
EDITAR VOCAL 5 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeVocal5", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesVocal5").val(respuesta["saberes_vocal5"]);
			$("#apreciaVocal5").val(respuesta["aprecia_vocal5"]);
			$("#asistenciaVocal5").val(respuesta["asistencia_vocal5"]);
			$("#observaVocal5").val(respuesta["observa_vocal5"]);			


								
		}
	})

	
})

/*=============================================
EDITAR TECNOLOGIA (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeTecnologia", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesTecnologia").val(respuesta["saberes_tecnologia"]);
			$("#apreciaTecnologia").val(respuesta["aprecia_tecnologia"]);
			$("#asistenciaTecnologia").val(respuesta["asistencia_tecnologia"]);
			$("#observaTecnologia").val(respuesta["observa_tecnologia"]);			


								
		}
	})

	
})


/*=============================================
EDITAR CONJUNTO 5 (ARTE - MUSICA)
=============================================*/

$(".tablas").on("click", ".btnEditarInformeConjunto5", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	




			$("#idAlumno").val(respuesta["id"]);
			$("#saberesConjunto5").val(respuesta["saberes_conjunto5"]);
			$("#apreciaConjunto5").val(respuesta["aprecia_conjunto5"]);
			$("#asistenciaConjunto5").val(respuesta["asistencia_conjunto5"]);
			$("#observaConjunto5").val(respuesta["observa_conjunto5"]);			


								
		}
	})

	
})


/*=============================================
IMPRIMIR INFORME INDIVIDUAL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeIndividual", function(){



	var idAlumno = $(this).attr("idAlumno");
	var informe = $(this).attr("informe");
	var area = $(this).attr("area");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&informe="+informe+"&area="+area+"&tabla="+tabla+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME X ÁREA
=============================================*/

$(".btnInformeArea").click(function(){

//$(".tablas").on("click", ".btnInformeArea", function(){


	var idCurso = $(this).attr("idCurso");
	var idCurso2 = $(this).attr("idCurso2");
	var idCurso3 = $(this).attr("idCurso3");
	var idCurso4 = $(this).attr("idCurso4");
	var informe = $(this).attr("informe");
	var area = $(this).attr("area");
	var tabla = $(this).attr("tabla");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");


	//console.log(modalidad);
	

	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&area="+area+"&tabla="+tabla+"&idCurso="+idCurso+"&idCurso2="+idCurso2+"&idCurso3="+idCurso3+"&idCurso4="+idCurso4+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCb", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME CICLO BASICO CON MAIL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCbMail", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 3ER. AÑO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo3", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 3ER. AÑO CON MAIL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo3Mail", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 4TO. AÑO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo4", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 4TO. AÑO CON MAIL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo4Mail", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 5TO. AÑO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo5", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME CICLO ORIENTADO 5TO. AÑO CON MAIL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCo5Mail", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var modalidad = $(this).attr("modalidad");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})