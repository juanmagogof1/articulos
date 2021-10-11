<?php /*https://codeshare.io/QnONnq*/
defined('BASEPATH') OR exit('No direct script access allowed');

//print_r($articulos);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artículos</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--Axios para peticiones GET y POST -->	
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body>

<div id="container">
	<h1>Artículos en venta</h1>

	<div id="body">
		<table class="table table-bordered">
    <thead>
      <tr>
      	<th>#</th>
        <th>Artículo</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Subtotal</th>
        <th>I.G.V.</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody id="nuevos">
    	

    </tbody>
  </table>
  <div class="input-group mb-3 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">Total</span>
    </div>
    <input type="text" class="form-control" id="fTotal" disabled>
  </div>

	<div id="addArticles">
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <span class="input-group-text">Artículo</span>
		    </div>
		    <select class="form-control" id="artVta"></select>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <span class="input-group-text">Cantidad:</span> <!-- Pendiente para conectar  -->
		    </div>
		    <input type="number" min="1" max="10" id="nCant" value="1">

		  </div>
		
		<button class="btn btn-outline-success waves-effect" onclick="addRow()">Agregar Artículo</button>
		<button class="btn btn-outline-danger waves-effect" >Comprar Carrito</button>
		<button class="btn btn-outline-info waves-effect" onclick="fillArticles();">Rellenar elemento</button>

	</div>
	
</div>

</body>
</html>

<script>
		fillArticles();

	window.onload = function(){
		//setInterval('fillArticles()',10000);
	}

	var allArticles ="";
	var tot = document.getElementById('fTotal');
	var art = document.getElementById('nuevos');
	var totF = 0;
	var articulo = document.getElementById('artVta');
	var cantidad = document.getElementById('nCant');
	var i = 1;
	function addRow(){
		var listado = {};
		var precio = 0;
		var cant = cantidad.value;
		var subt =0;
		var igv = 0;
		var total = 0;
		
		let nombre;
		if(articulo.value > 0){
			for(var obj of allArticles){
				if(obj.eIdProducto == articulo.value){
					precio = obj.ePrecioVenta;
					nombre = obj.txtNomProd;
				}
			}
			subt = precio * cant;
			igv = subt * 0.19;
			total = subt + igv;

			var row = "<tr>";
			row += "<td>" + i + "</td>";
			row += "<td>"+ nombre +"</td>";
			row += "<td>"+ cant +"</td>";
			row += "<td>"+ precio +" </td>";
			row += "<td>"+subt+"</td>";
			row += "<td>"+igv+"</td>";
			row += "<td>"+total+"</td>";
			row += "</tr>";
			art.innerHTML += row;
			i++;
			totF = totF + total;
			tot.value = totF;
		}else{
			alert("Seleccione un artículo!");
		}

	}
	function fillArticles(){
		axios.get("<?php echo site_url('getArticles') ?>",{
	            responseType: 'json'
      }).then(function(res) {
        if (res.status == 200) {
        	//alert(res.data);
        	var item = "<option value ='0'>Seleccione una opción </option>";
        	for(var obj of res.data){
        		item += "<option value='" + obj.eIdProducto + "'><label>Artículo: </label>" + obj.txtNomProd + "<label>| P/U: </label>" + obj.ePrecioVenta + " </option>";
        	}
        	articulo.innerHTML = item;
        	allArticles = res.data;
        }
  	}).catch(function(err) {
          alert("Error en encontrar la URL");
          console.log(err);
    });
	}
</script>
<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: .5%;
		border: 1ps dotted darkblue;
		width: 99%;

	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>