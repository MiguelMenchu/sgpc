$(document).on('ready',cargar);

function cargar(){
	$("#inicialrecurrentes").on('click',iniciar);
	$("#abnuevos").on('click',iniciar);
	$("#dicertar").on('click',iniciar);
	$("#brecurrentes").on('click',iniciar);
	$("#bnuevos").on('click',iniciar);

}

function iniciar(){
	var divtotalclientes = [$("#ssinicial"),$("#senero"),$("#sfebrero"),
	$("#smarzo"),$("#sabril"),$("#smayo"),
	$("#sjunio"),$("#sjulio"),$("#sagosto"),
	$("#sseptiembre"),$("#soctubre"),$("#snoviembre"),
	$("#sdiciembre")];

	var divtotalclientesmes = [$("#tssinicial"),$("#tsenero"),$("#tsfebrero"),
	$("#tsmarzo"),$("#tsabril"),$("#tsmayo"),
	$("#tsjunio"),$("#tsjulio"),$("#tsagosto"),
	$("#tsseptiembre"),$("#tsoctubre"),$("#tsnoviembre"),
	$("#tsdiciembre")];

	var divcrecimientomensual = [$("#cssinicial"),$("#csenero"),$("#csfebrero"),
	$("#csmarzo"),$("#csabril"),$("#csmayo"),
	$("#csjunio"),$("#csjulio"),$("#csagosto"),
	$("#csseptiembre"),$("#csoctubre"),$("#csnoviembre"),
	$("#csdiciembre")];

	var divmontosnuevos = [$("#mssinicial"),$("#msenero"),$("#msfebrero"),
	$("#msmarzo"),$("#msabril"),$("#msmayo"),
	$("#msjunio"),$("#msjulio"),$("#msagosto"),
	$("#msseptiembre"),$("#msoctubre"),$("#msnoviembre"),
	$("#msdiciembre")];

	var divdesembolsos = [$("#dssinicial"),$("#dsenero"),$("#dsfebrero"),
	$("#dsmarzo"),$("#dsabril"),$("#dsmayo"),
	$("#dsjunio"),$("#dsjulio"),$("#dsagosto"),
	$("#dsseptiembre"),$("#dsoctubre"),$("#dsnoviembre"),
	$("#dsdiciembre")];

	var divrecuperacion = [$("#rssinicial"),$("#rsenero"),$("#rsfebrero"),
	$("#rsmarzo"),$("#rsabril"),$("r#smayo"),
	$("#rsjunio"),$("#rsjulio"),$("#rsagosto"),
	$("#rsseptiembre"),$("#rsoctubre"),$("#rsnoviembre"),
	$("#rsdiciembre")];

	var clientesnuevos = [parseInt($("#cenero").val()),parseInt($("#cfebrero").val()),
	parseInt($("#cmarzo").val()),parseInt($("#cabril").val()),parseInt($("#cmayo").val()),
	parseInt($("#cjunio").val()),parseInt($("#cjulio").val()),parseInt($("#cagosto").val()),
	parseInt($("#cseptiembre").val()),parseInt($("#coctubre").val()),parseInt($("#cnoviembre").val()),
	parseInt($("#cdiciembre").val())];

	var clientesnuevosagricola = [parseInt($("#acenero").val()),parseInt($("#acfebrero").val()),
	parseInt($("#acmarzo").val()),parseInt($("#acabril").val()),parseInt($("#acmayo").val()),
	parseInt($("#acjunio").val()),parseInt($("#acjulio").val()),parseInt($("#acagosto").val()),
	parseInt($("#acseptiembre").val()),parseInt($("#acoctubre").val()),parseInt($("#acnoviembre").val()),
	parseInt($("#acdiciembre").val())];

	var clientesrecurrentes = [parseInt($("#clientesinicialesrecurrentes").val()),parseInt($("#cenerorecurrentes").val()),
	parseInt($("#cfebrerorecurrentes").val()),parseInt($("#cmarzorecurrentes").val()),
	parseInt($("#cabrilrecurrentes").val()),parseInt($("#cmayorecurrentes").val()),
	parseInt($("#cjuniorecurrentes").val()),parseInt($("#cjuliorecurrentes").val()),
	parseInt($("#cagostorecurrentes").val()),parseInt($("#cseptiembrerecurrentes").val()),
	parseInt($("#coctubrerecurrentes").val()),parseInt($("#cnoviembrerecurrentes").val()),
	parseInt($("#cdiciembrerecurrentes").val())];
	
	var clientesdisercion = [parseInt($("#cdenero").val()),
	parseInt($("#cdfebrero").val()),parseInt($("#cdmarzo").val()),
	parseInt($("#cdabril").val()),parseInt($("#cdmayo").val()),
	parseInt($("#cdjunio").val()),parseInt($("#cdjulio").val()),
	parseInt($("#cdagosto").val()),parseInt($("#cdseptiembre").val()),
	parseInt($("#cdoctubre").val()),parseInt($("#cdnoviembre").val()),
	parseInt($("#cddiciembre").val())];

	var montosnuevos = [parseInt($("#montonuevoenero").val()),
	parseInt($("#montonuevofebrero").val()),parseInt($("#montonuevomarzo").val()),
	parseInt($("#montonuevoabril").val()),parseInt($("#montonuevomayo").val()),
	parseInt($("#montonuevojunio").val()),parseInt($("#montonuevojulio").val()),
	parseInt($("#montonuevoagosto").val()),parseInt($("#montonuevoseptiembre").val()),
	parseInt($("#montonuevooctubre").val()),parseInt($("#montonuevonoviembre").val()),
	parseInt($("#montonuevodiciembre").val())];

	var montosnuevosagricola = [parseInt($("#amontonuevoenero").val()),
	parseInt($("#amontonuevofebrero").val()),parseInt($("#amontonuevomarzo").val()),
	parseInt($("#amontonuevoabril").val()),parseInt($("#amontonuevomayo").val()),
	parseInt($("#amontonuevojunio").val()),parseInt($("#amontonuevojulio").val()),
	parseInt($("#amontonuevoagosto").val()),parseInt($("#amontonuevoseptiembre").val()),
	parseInt($("#amontonuevooctubre").val()),parseInt($("#amontonuevonoviembre").val()),
	parseInt($("#amontonuevodiciembre").val())];

	var montosrecurrentes = [parseInt($("#montonuevorecurrente").val()),parseInt($("#emontorecurrente").val()),
	parseInt($("#fmontorecurrente").val()),parseInt($("#mmontorecurrente").val()),
	parseInt($("#amontorecurrente").val()),parseInt($("#mymontorecurrente").val()),
	parseInt($("#jmontorecurrente").val()),parseInt($("#jlmontorecurrente").val()),
	parseInt($("#agmontorecurrente").val()),parseInt($("#smontorecurrente").val()),
	parseInt($("#omontorecurrente").val()),parseInt($("#nmontorecurrente").val()),
	parseInt($("#dmontorecurrente").val())];

	var recuperaciones = [parseInt($("#re").val()),
	parseInt($("#rf").val()),parseInt($("#rm").val()),
	parseInt($("#ra").val()),parseInt($("#rmy").val()),
	parseInt($("#rj").val()),parseInt($("#rjl").val()),
	parseInt($("#rag").val()),parseInt($("#rs").val()),
	parseInt($("#ro").val()),parseInt($("#rn").val()),
	parseInt($("#rd").val())];

	
	var saldo = 0;
	var totalmes;
	var crecimientomensaual;
	var saldomontos = 0;
	var j=0; 
	var desembolsos;
	var opcionpresupuesto = parseInt($("#tipoprograma").val());
	var porcentajerecuperacion = parseInt($("#porcentajerecuperacion").val());
	var plazocreditos = parseInt($("#plazocreditos").val());


if(opcionpresupuesto == 1){
	while (j < 12) {
		totalmes = 0;
		crecimientomensaual = 0;
		desembolsos = 0;
		if (j == 0){
			saldo = (clientesrecurrentes[j]+clientesnuevosagricola[j]+clientesrecurrentes[j+1])-clientesdisercion[j];
			if(isNaN(montosrecurrentes[j]))
				montosrecurrentes[j] = 0;
			if(isNaN(montosnuevosagricola[j]))
				montosnuevosagricola[j] = 0;
			if(isNaN(montosrecurrentes[j+1]))
				montosrecurrentes[j+1] = 0;
			saldomontos = (montosrecurrentes[j]+montosnuevosagricola[j]+montosrecurrentes[j+1]);
			crecimientomensaual = (clientesrecurrentes[j+1]+clientesnuevosagricola[j])-clientesdisercion[j];
			totalmes = clientesnuevosagricola[j]+clientesrecurrentes[j+1];
			desembolsos = montosrecurrentes[j+1]+montosnuevosagricola[j];
		}
		else{	
			saldo = (saldo+clientesnuevosagricola[j]+clientesrecurrentes[j+1])-clientesdisercion[j];
			totalmes = clientesrecurrentes[j+1]+clientesnuevosagricola[j];
			crecimientomensaual = (clientesrecurrentes[j+1]+clientesnuevosagricola[j])-clientesdisercion[j];
			if(isNaN(montosnuevosagricola[j]))
				montosnuevosagricola[j] = 0;
			if(isNaN(montosrecurrentes[j+1]))
				montosrecurrentes[j+1] = 0;
			if(isNaN(recuperaciones[j]))
				recuperaciones[j] = 0;
			
				

			saldomontos = (saldomontos+montosnuevosagricola[j]+montosrecurrentes[j+1]);
			desembolsos = montosrecurrentes[j+1]+montosnuevosagricola[j];
		}

	divtotalclientes[j+1].html(saldo);
	divtotalclientesmes[j+1].html(totalmes);
	divcrecimientomensual[j+1].html(crecimientomensaual);
	divmontosnuevos[j+1].html(saldomontos);
	divdesembolsos[j+1].html(desembolsos);
	divrecuperacion[j+1].html(recuperaciones[j])
	j++;
	}
}
else{
	while (j < 12) {
		totalmes = 0;
		crecimientomensaual = 0;
		desembolsos = 0;
		if (j == 0){
			saldo = (clientesrecurrentes[j]+clientesnuevos[j]+clientesrecurrentes[j+1])-clientesdisercion[j];
			if(isNaN(montosrecurrentes[j]))
				montosrecurrentes[j] = 0;
			if(isNaN(montosnuevos[j]))
				montosnuevos[j] = 0;
			if(isNaN(montosrecurrentes[j+1]))
				montosrecurrentes[j+1] = 0;
			saldomontos = (montosrecurrentes[j]+montosnuevos[j]+montosrecurrentes[j+1]);
			crecimientomensaual = (clientesrecurrentes[j+1]+clientesnuevos[j])-clientesdisercion[j];
			totalmes = clientesnuevos[j]+clientesrecurrentes[j+1];
			desembolsos = montosrecurrentes[j+1]+montosnuevos[j];
		}
		else{	
			saldo = (saldo+clientesnuevos[j]+clientesrecurrentes[j+1])-clientesdisercion[j];
			totalmes = clientesrecurrentes[j+1]+clientesnuevos[j];
			crecimientomensaual = (clientesrecurrentes[j+1]+clientesnuevos[j])-clientesdisercion[j];
			if(isNaN(montosnuevos[j]))
				montosnuevos[j] = 0;
			if(isNaN(montosrecurrentes[j+1]))
				montosrecurrentes[j+1] = 0;
			if(isNaN(recuperaciones[j]))
				recuperaciones[j] = 0;
			
				

			saldomontos = (saldomontos+montosnuevos[j]+montosrecurrentes[j+1]);
			desembolsos = montosrecurrentes[j+1]+montosnuevos[j];
		}

	divtotalclientes[j+1].html(saldo);
	divtotalclientesmes[j+1].html(totalmes);
	divcrecimientomensual[j+1].html(crecimientomensaual);
	divmontosnuevos[j+1].html(saldomontos);
	divdesembolsos[j+1].html(desembolsos);
	var recuperacionn = (saldo*porcentajerecuperacion)/plazocreditos;
	divrecuperacion[j+1].html(recuperacionn);
	j++;
	}	
}

	divtotalclientes[0].html(clientesrecurrentes[0]);
	divmontosnuevos[0].html(montosrecurrentes[0]);
	/*var a = parseInt($("#montonuevorecurrente").val());
	alert("El valor inicial es "+a);
	if (isNaN(montosrecurrentes[0])){ 
		alert("El monto inicial es NaN ahora lo convertire y vere los resultados");
		montosrecurrentes[0]=3;
		alert("el valor ahora es"+montosrecurrentes[0]);
	}
	else
		alert("lA funcion isNaN no funciona");//*/
	//alert("El valor cuando no tiene nada es "+montosrecurrentes[0]);

}

function ajaxget(){
	var pprograma = parseInt($("#pprograma").val());
	var ptipocliente = parseInt($("#ptipocliente").val());
	var conexion;

	if(pprograma=="" || ptipocliente==""){
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		conexion = new XMLHttpRequest();
	}	
	else{
		conexion = new ActiveXObject("Microsoft.XMLHTTP");
	}
	conexion.onreadystatechange = function(){
		if(conexion.readyState == 4 && conexion.status == 200){
			document.getElementById("verpresupuestos").innerHTML = conexion.responseText;
		}
	}
	conexion.open("GET","controlador.php?pprograma="+pprograma+"&&ptipocliente="+ptipocliente,true);
	conexion.send();
	//alert("HOLA, el programa es: "+pprograma);
	//alert("Hola de nuevo, el tipo de cliente es: "+ptipocliente);
}

function ajaxgetmontos(){
	var pprograma = parseInt($("#pprogramamontos").val());
	var ptipocliente = parseInt($("#ptipoclientemontos").val());
	var conexion;

	if(pprograma=="" || ptipocliente==""){
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		conexion = new XMLHttpRequest();
	}	
	else{
		conexion = new ActiveXObject("Microsoft.XMLHTTP");
	}
	conexion.onreadystatechange = function(){
		if(conexion.readyState == 4 && conexion.status == 200){
			document.getElementById("verpresupuestos").innerHTML = conexion.responseText;
		}
	}
	conexion.open("GET","controlador.php?pprogramamontos="+pprograma+"&&ptipoclientemontos="+ptipocliente,true);
	conexion.send();
	//alert("HOLA, el programa es: "+pprograma);
	//alert("Hola de nuevo, el tipo de cliente es: "+ptipocliente);
}

function cantidadclientes(){
	for (var i = 0; i < 26; i++){
		document.write("<option value="+parseInt(i)+">"+i+"</option>");
	};
}

function prog(){
	if(parseInt($("#tipoprograma").val()) == 0)
		alert("Seleccione uno de los programas disponibles");
}

function tiporeporte(){
	var opcionreporte = parseInt($("#tiporeporte").val());

	switch (opcionreporte){
		case 1:
			document.getElementById('opcionclientespecificos').style.display='block';
			break;
		case 2:
			document.getElementById('opcionsaldospecificos').style.display='block';
			break;
		case 3:
			document.getElementById('saldosgenerales').style.display='block';
			break;
	}
	//alert("el tipo de reporte es"+opcionreporte);
} 

function tipopresupuesto(){

	var opcionpresupuesto = parseInt($("#tipoprograma").val());

	if(opcionpresupuesto == 0)
		alert("Seleccione un programa");
	if(opcionpresupuesto == 1)
		document.getElementById('clientesagricola').style.display='block';
	if(opcionpresupuesto > 1)
		document.getElementById('clientes').style.display='block';
}


$(function () {
	alert("Hola mundo");
    var columns = [
        { title: "Order ID", width: 100, dataIndx: "OrderID" },
        { title: "Customer Name", width: 130, dataIndx: "CustomerName" },
        { title: "Product Name", width: 190, dataIndx: "ProductName" },
        { title: "Unit Price", width: 100, dataIndx: "UnitPrice", align: "right" },
        { title: "Quantity", width: 100, dataIndx: "Quantity", align: "right" },
        { title: "Order Date", width: 100, dataIndx: "OrderDate" },
        { title: "Required Date", width: 100, dataIndx: "RequiredDate" },
        { title: "Shipped Date", width: 100, dataIndx: "ShippedDate" },
        { title: "ShipCountry", width: 100, dataIndx: "ShipCountry" },
        { title: "Freight", width: 100, align: "right", dataIndx: "Freight" },
        { title: "Shipping Name", width: 120, dataIndx: "ShipName" },
        { title: "Shipping Address", width: 180, dataIndx: "ShipAddress" },
        { title: "Shipping City", width: 100, dataIndx: "ShipCity" },
        { title: "Shipping Region", width: 110, dataIndx: "ShipRegion" },
        { title: "Shipping Postal Code", width: 160, dataIndx: "ShipPostalCode" }
    ];
    var dataModel = {
        location: "remote",
        sorting: "local",            
        dataType: "JSON",
        method: "GET",            
        url: "/Content/invoice.json",
        getData: function (dataJSON) {
            return { curPage: dataJSON.curPage, totalRecords: dataJSON.totalRecords, data: dataJSON.data };
        }
    }
 
    var $grid = $("div#grid_freeze_columns").pqGrid({ width: "100%", height: 500,
        dataModel: dataModel,
        pageModel: { type: 'local', rPP: 20, rPPOptions: [1, 10, 20, 30, 40, 50, 100] },
        colModel: columns,            
        toolbar: {
            style: "text-align:center",
            items: [
                { type: '<span>Select number of columns to freeze: </span>' },
                { type: 'select', options: [0, 1, 2, 3], listeners: [
                    {
                        change: function (evt) {
                            $grid.pqGrid("option", "freezeCols", $(this).val());
                            $grid.pqGrid("refresh");
                        }
                    }
                ]
                },
                { type: 'separator' },
                { type: 'checkbox', style: 'margin-right:5px;', attr: 'id=wrapText checked="checked"', listeners: [
                    {
                        change: function (evt) {
                            if ($(this).is(":checked")) {
                                $grid.pqGrid("option", { wrap: true, hwrap: true });
                            }
                            else {
                                $grid.pqGrid("option", { wrap: false, hwrap: false });
                            }
                            $grid.pqGrid("refresh");
                        }
                    }
                ]
                },
                { type: "<label for='wrapText'>Wrap Text</label>" }
            ]
        },
        numberCell: { resizable: true, width: 40, title: "#", minWidth: 25 },
        title: "Shipping Orders",
        resizable: true
    });
});



//document.getElementById('opcionesreportes').style.display='block'
// Yo no tengo fe en lo que Dios puede hacer en mi
// Senior, enseniame a tener fe en lo que puedes hacer en mi.
//47547838