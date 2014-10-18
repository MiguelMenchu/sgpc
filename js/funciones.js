$(document).on('ready',cargar);

function cargar(){
	 $("#inicial").on('click',iniciar);
	 $("#benero").on('click',iniciar);
	 $("#bfebrero").on('click',iniciar);
	 $("#bmarzo").on('click',iniciar);
	 $("#babril").on('click',iniciar);
	 $("#bmayo").on('click',iniciar);
	 $("#bjunio").on('click',iniciar);
	 $("#bjulio").on('click',iniciar);
	 $("#bagosto").on('click',iniciar);
	 $("#bseptiembre").on('click',iniciar);
	 $("#boctubre").on('click',iniciar);
	 $("#bnoviembre").on('click',iniciar);
	 $("#bdiciembre").on('click',iniciar);
}

function iniciar(){
	var cinicial = $("#ssinicial");
	var senero = $("#senero");
	var sfebrero = $("#sfebrero");
	var smarzo = $("#smarzo");
	var sabril = $("#sabril");
	var smayo = $("#smayo");
	var sjunio = $("#sjunio");
	var sjulio = $("#sjulio");
	var sagosto = $("#sagosto");
	var sseptiembre = $("#sseptiembre");
	var soctubre = $("#soctubre");
	var snoviembre = $("#snoviembre");
	var sdiciembre = $("#sdiciembre");

	var y = parseInt($("#clientesiniciales").val());
	var cenero = parseInt($("#cenero").val());
	var cfebrero = parseInt($("#cfebrero").val());
	var cmarzo = parseInt($("#cmarzo").val());
	var cabril = parseInt($("#cabril").val());
	var cmayo = parseInt($("#cmayo").val());
	var cjunio = parseInt($("#cjunio").val());
	var cjulio = parseInt($("#cjulio").val());
	var cagosto = parseInt($("#cagosto").val());
	var cseptiembre = parseInt($("#cseptiembre").val());
	var coctubre = parseInt($("#coctubre").val());
	var cnoviembre = parseInt($("#cnoviembre").val());
	var cdiciembre = parseInt($("#cdiciembre").val());

	var saldoinicial = y;
	cinicial.html(saldoinicial);
	var saldoenero = y+cenero;
	senero.html(saldoenero);
	var saldofebrero = saldoenero+cfebrero;
	sfebrero.html(saldofebrero);
	var saldomarzo = saldofebrero+cmarzo;
	smarzo.html(saldomarzo);
	var saldoabril = saldomarzo+cabril;
	sabril.html(saldoabril);
	var saldomayo = saldoabril+cmayo;
	smayo.html(saldomayo);
	var saldojunio = saldomayo+cjunio;
	sjunio.html(saldojunio);
	var saldojulio = saldojunio+cjunio;
	sjulio.html(saldojulio);
	var saldoagosto = saldojulio+cagosto;
	sagosto.html(saldoagosto);
	var saldoseptiembre = saldoagosto+cseptiembre;
	sseptiembre.html(saldoseptiembre);
	var saldooctubre = saldoseptiembre+coctubre;
	soctubre.html(saldooctubre);
	var saldonoviembre = saldooctubre+cnoviembre;
	snoviembre.html(saldonoviembre);
	var saldodiciembre = saldonoviembre+cdiciembre;
	sdiciembre.html(saldodiciembre);
}
