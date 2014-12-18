$(document).on('ready',cargar);


function cargar(){

 var tipoprograma = $("#tipoprograma").val();
 if(tipoprograma == 0){
 	document.getElementById('grid_array').style.display='none';
 	alert("Eliga en programa disponible");
 }
 else{
 document.getElementById('grid_array').style.display='block';

          
$(function () {     
 var countries = new Array("200", "100");
 $("#input").jqxInput({placeHolder: "Clientes Iniciales", height: 25, width: 100, minLength: 1,  source: countries });       
        
        var data = [['saldo 2014',,,,,,,,,,,,],
            ["ene 2015",,,,,,,,,,,,],
			["mar 2015",,,,,,,,,,,,],
			["abr 2015",,,,,,,,,,,,],
			["may 2015",,,,,,,,,,,,],
			["jun 2015",,,,,,,,,,,,],
			["jul 2015",,,,,,,,,,,,],
			["Ago 2015",,,,,,,,,,,,],
			["sep 2015",,,,,,,,,,,,],
			["oct 2015",,,,,,,,,,,,],
			["nov 2015",,,,,,,,,,,,],
			["dic 2015",,,,,,,,,,,,],
			["totales 2015",,,,,,,,,,,,],
			["extras 2015",,,,,,,,,,,,]];

		
		//alert("Acabo de comprobar que si es indefinida y ahora la tengo que igualar a cero");

        var obj = { width: 1095, height: 447, title: "Operaciones del anio 2015",resizable:false,draggable:true };
        obj.colModel = [{ title: "Fecha", width: 86, dataType: "string", align: "center", editable: false},
        { title: "Saldos", width: 65, dataType: "integer", align: "center", editable: true},
        { title: "Crecimiento Mensual", width: 86, dataType: "integer", align: "center", editable: false },
        { title: "Total Casos", width: 86, dataType: "integer", align: "center", editable: false },
        { title: "Nuevos", width: 65, dataType: "integer", align: "center"},
        { title: "Recreditos", width: 86, dataType: "integer", align: "center" },
        { title: "Retiros", width: 65, dataType: "integer", align: "center"},
        { title: "Saldo Nuevos", width: 86, dataType: "integer", align: "center"},
        { title: "saldo Recurrentes", width: 86, dataType: "integer", align: "center"},
        { title: "Saldos", width: 65, dataType: "integer", align: "center",  editable: true},
        { title: "Desembolsos", width: 86, dataType: "integer", align: "center", editable: false},
        { title: "Recuperacion", width: 86, dataType: "integet", align: "center"},
        { title: "Crecimiento Mensual", width: 86, dataType: "integer", align: "center", editable: false}];
        obj.dataModel = { data: data };
        var $grid = $("#grid_array").pqGrid(obj);
        $("#grid_array").pqGrid({editModel:{clicksToEdit: 2,saveKey:13 }});

       // alert("Jesus mi mejor amigo");
      for (var i = 0; i < 12; i++) {
       		for (var j = 1; j <=12; j++) { 
       			if (typeof(data[i][j]) == "undefined")
       				data[i][j] = 0;
       		};
       	};
       
      obj.dataModel = { data: data };
        var $grid = $("#grid_array").pqGrid(obj);
        $("#grid_array").pqGrid({editModel:{clicksToEdit: 2,saveKey:13 }});
        var colM=$( "#grid_array" ).pqGrid( "option" , "colModel" );
        colM[0][1].editable=false;


       $grid.on( "pqgridcellsave", function()   {
			var j = 1;
      		for (var i = 1; i < 12; i++) {
       		//Crecimiento mensual clientes
       		data[i][j+1]=data[i][j+3]-data[i][j+5];
       		//Saldos clientes agricola
       		data[i][j]=parseInt(data[i-1][j])+parseInt(data[i][j+1]);
       		//alert("Hola mundo amigo");
       		//Total casos 
       		data[i][j+2]=parseInt(data[i][j+3])+parseInt(data[i][j+4]);
       		//Desembolsos
       		data[i][j+9]=parseInt(data[i][j+6])+parseInt(data[i][j+7]);
       		//Saldos montos agricola
       		data[i][j+8]=(parseInt(data[i-1][j+8])+parseInt(data[i][j+9]))-parseInt(data[i][j+10]); 
       		//Crecimiento mensual montos
       		data[i][j+11]=parseInt(data[i][j+9])-parseInt(data[i][j+10]);
       		//alert("Estoy listo para iniciar a realizar los calculos");
       		obj.dataModel = { data: data };
        	var $grid = $("#grid_array").pqGrid(obj);
        	$("#grid_array").pqGrid({editModel:{clicksToEdit: 2,saveKey:13 }});
       	}
       }
        //var dataType = alineacion[0].dataType;
        //alert("The type data of the one column is "+dataType);


    );

	
});
}
}
/*







XMLHTTPx
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