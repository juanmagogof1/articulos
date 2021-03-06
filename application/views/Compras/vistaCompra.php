
<style>
	#tblArticles{
		align-self: center;
		padding: 5px;
		width: 98%;
		background-color: black;
		color: white;
		margin : 1%;
	}
	#title{
		align-self: center;
		padding: 5px;
	}
	.tot{
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-end;
	}
	#tot{
		padding: 5px;
		text-align: left;
		width: 30%;

	}
	#body{
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		align-items: center;
		width: 50%;
	}
	h1{
		text-align: center;
	}
	th{
		text-align: center;
		font-size: 1.2vw; /*se va a transformar de acuerdo v = view && w = width*/
	}
	td{
		text-align: center;
		font-size: 1vw; /*se va a transformar de acuerdo v = view && w = width*/
	}
</style>
<main>
	<div id="container">
		<h1 id="title">Artículos en venta</h1>
		
		<table class="table table-bordered" id="tblArticles">
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
  
  <div class="tot">
  	<div class="input-group mb-3 input-group-sm" id="tot">
  	   <div class="input-group-prepend">
  	     <span class="input-group-text">Total</span>
  	  </div>
  	  <input type="text" class="form-control" id="fTotal" disabled>
  	</div>
  </div>
	<div id="body">  
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
			</div>
			</div>
			<button class="btn btn-outline-success waves-effect" onclick="addRow()">Agregar Artículo</button>
			<button class="btn btn-outline-danger waves-effect" >Comprar Carrito</button>
			<button class="btn btn-outline-info waves-effect" onclick="verCarrito();">Ver carrito</button>

	
		

</main>


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

	
	class Carrito{
		constructor(id,precio,nombre,cant,subt,igv,tot,next){
			this.id = id;
			this.precio = precio;
			this.nombre = nombre;
			this.cant = cant;
			this.subt = subt;
			this.igv = igv;
			this.tot = tot;
			this.next = next;
		}
	}

	class ListCarrito {
		constructor(){
			this.head = null;
		}
		prepend(id,precio,nombre,cant,subt,igv,tot){
			const newItem = new Carrito(id,precio,nombre,cant,subt,igv,tot,this.head);
			this.head = newItem;
		}
		print(){
	    let currentNode = this.head;
	    while (currentNode) {
	    	//return currentNode;
	      alert("Id = " + currentNode.id);
	      alert("Nombre = " + currentNode.nombre);
	      alert("Precio = " + currentNode.precio);
	      alert("Cantidad = " + currentNode.cant);
	      alert("Subtotal = " + currentNode.subt);
	      alert("IGV = " + currentNode.igv);
	      alert("Total = " + currentNode.tot);
	      currentNode = currentNode.next;
	  	}
  	}
  	deleteHead() {
  	    if (this.head) {
  	      if (this.head.next) {
  	        const secondNode = this.head.next;
  	        this.head = secondNode;
  	      } else {
  	        this.head = null;
  	      }
  	    }
  	  }
	}
	carrito = new ListCarrito();

	

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
					eId = obj.eIdProducto;
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

			/*creación del objeto Carrito*/

			
			carrito.prepend(eId,precio,nombre,cant,subt,igv,total);


		}else{
			alert("Seleccione un artículo!");
		}

	}


function verCarrito(){
	carrito.print();
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