
$(document).on("ready", iniciar);
function iniciar() {
	$("#comprobar").on("click", validar);
}
function validar() 
{
	var acumulador = 0;

	if($("#pregunta1_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta2_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta3_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta4_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta5_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta6_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta7_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta8_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta9_respuesta1").is(':checked')) {
		acumulador += 1;
	}
	if($("#pregunta10_respuesta1").is(':checked')) {
		acumulador += 1; // Para que te valide todas las respuestas!! Si lo dejas, un if dentro de otro, solo lo validará si la condicion del primero se cumple! 
	}
	//Ya patee 
	//Así todas las preguntas y respuestas... Y al final!... Donde está, en el explorador??? mostrame la página! O por 
	var resultado = "Su puntaje es: " + acumulador + "/" + 10;
	alert(resultado);
	if(acumulador == 10) {
		//window.history.back(1);
		document.location.href='pagina_usuario.php';
	}
	if(acumulador != 10) {
		alert("--------Intentalo nuevamente---------");
		event.preventDefault();
	}
    else 
    {
	    alert("Felicitaciones usted ha aprobado el checklist");
        //document.location.href='checklist.html';
    }
}