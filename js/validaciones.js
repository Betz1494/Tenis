
$(document).ready(function(){
	console.log("iniciando JQUERY");
});


$("#equipos").submit(function(){
	IdJugador=$('#IdJugador').val();
	IdJugador1=$('#IdJugador1').val();
	IdJugadorF=$('#IdJugadorF').val();
	IdJugadorF1=$('#IdJugadorF1').val();
	/*IdJugadorM=$('#IdJugadorM').val();
	IdJugadorM1=$('#IdJugadorM1').val();
	JugadorF1=$('#JugadorF1').val();
	JugadorF2=$('JugadorF2').val();*/

	if($("#DobleFemenino"))
    {
		if($("#IdJugador").val() == $("#IdJugador1").val()){
			alert("Los integrantes del equipo deben ser Diferentes");
			return false;
		}

		else if ($("#IdJugador1").val()==$("#IdJugadorF1").val()){
			alert("Los integrantes del equipo deben ser Diferentes");
			return false;
		}
	}

	else{
		return true;
	}

});

$(document).ready(function(){


	$("#formJugador").submit(function(){
		Nombre=$('#Nombre').val();
		Edad=$('#Edad').val();
		Sexo=$('#Sexo').val();
		Nacionalidad=$('#Nacionalidad').val();
		Altura=$('#Altura').val();
		Profesional=$('#Profesional').val();
		Clasificacion=$('#Clasificacion').val();
		idFederacion=$('#idFederacion').val();
		imagen=$('#imagen').val();

	if($("#Edad").val()>45 || $("#Edad").val()<20 ){
	 	alert("Edad NO Valida");
	 	return false;
	 }

	 else{
       $.ajax({
       	url:"<?php echo base_url.'gestor/Jugador';",
       	type:'POST',
       	data:{Nombre:Nombre,Edad:Edad,Sexo:Sexo,Nacionalidad:Nacionalidad,Altura:Altura,Profesional:Profesional,Clasificacion:Clasificacion,
       		idFederacion:idFederacion,imagen:imagen},success:function(result){	
       		$("#formJugador").html(result);

       	}});

	 }

	})


});

function mostrar(id){

   if (id == "Mixto") {
        $("#Mixto").show();
        $("#Mixto1").show();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
         $("#DobleFemenino").hide();
         $("#DobleFemenino1").hide();
    }

    if (id == "DobleMasculino") {
        $("#Mixto").hide();
        $("#Mixto1").hide();
        $("#DobleFemenino").hide();
        $("#DobleFemenino1").hide();
        $("#DobleMasculino").show();
        $("#DobleMasculino1").show();
    }

    if (id == "DobleFemenino") {
        $("#Mixto").hide();
        $("#Mixto1").hide();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
        $("#DobleFemenino").show();
        $("#DobleFemenino1").show();
    }


}

function mostrarP(id){

   if (id == "SimpleFemenino") {
        $("#SimpleFemenino").show();
        $("#SimpleFemenino1").show();
        $("#SimpleMasculino").hide();
        $("#SimpleMasculino1").hide();
        $("#DobleFemenino").hide();
        $("#DobleFemenino1").hide();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
        $("#Mixto").hide();
        $("#Mixto1").hide();
         //$("#Mixto1").hide();
    }

    if (id == "SimpleMasculino") {
    	$("#SimpleFemenino").hide();
        $("#SimpleFemenino1").hide();
    	$("#SimpleMasculino").show();
        $("#SimpleMasculino1").show();
        $("#DobleFemenino").hide();
        $("#DobleFemenino1").hide();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
        $("#Mixto").hide();
        $("#Mixto1").hide();
       
       
        //$("#Doble1").show();
    }

    if (id == "DobleFemenino") {
        $("#SimpleFemenino").hide();
        $("#SimpleFemenino1").hide();
    	$("#SimpleMasculino").hide();
        $("#SimpleMasculino1").hide();
        $("#DobleFemenino").show();
        $("#DobleFemenino1").show();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
        $("#Mixto").hide();
        $("#Mixto1").hide();
    }

    if (id == "DobleMasculino") {
        $("#SimpleFemenino").hide();
        $("#SimpleFemenino1").hide();
    	$("#SimpleMasculino").hide();
        $("#SimpleMasculino1").hide();
        $("#DobleFemenino").hide();
        $("#DobleFemenino1").hide();
        $("#DobleMasculino").show();
        $("#DobleMasculino1").show();
        $("#Mixto").hide();
        $("#Mixto1").hide();
    }

     if (id == "Mixto") {
        $("#SimpleFemenino").hide();
        $("#SimpleFemenino1").hide();
    	$("#SimpleMasculino").hide();
        $("#SimpleMasculino1").hide();
        $("#DobleFemenino").hide();
        $("#DobleFemenino1").hide();
        $("#DobleMasculino").hide();
        $("#DobleMasculino1").hide();
        $("#Mixto").show();
        $("#Mixto1").show();
    }


}

 

