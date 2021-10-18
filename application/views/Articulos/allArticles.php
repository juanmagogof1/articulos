<style>
	#addArticle{
		align-self: flex-end;
		padding: 5px;
	}
	#tblArticles{
		align-self: center;
		padding: 5px;
		width: 98%;
	}
	th{
		text-align: center;
		font-size: 1.2vw; /*se va a transformar de acuerdo v = view && w = width*/
	}
	td{
		text-align: center;
		font-size: 1vw; /*se va a transformar de acuerdo v = view && w = width*/
	}
	.btnAdd{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: blue;
		font-size: 1vw;
		color: white;
	}
	.btnEdit{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: blue;
		font-size: 1vw;
		padding: 5px;
		margin-right: 2px;
		margin-left: 2px;
		color: white;
	}
	.btnDelete{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: orange;
		font-size: 1vw;
		padding: 5px;
		margin-right: 2px;
		margin-left: 2px;
		color: white;
	}
	.btnActivo{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: green;
		font-size: 1vw;
		padding: 5px;
		margin-right: 2px;
		margin-left: 2px;
		color: white;
	}
	.btnInactivo{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: red;
		font-size: 1vw;
		padding: 5px;
		margin-right: 2px;
		margin-left: 2px;
		color: white;
	}

</style>
<main>
	<div id="addArticle">
		<!--<button class="btnAdd" onclick="nwProducto();">Agregar Artículo</button>-->
		<button class="btnAdd" data-toggle="modal" data-target="#addProduct">Agregar Artículo</button>
	</div>
	<div id="tblArticles">
		<table class="table table-dark table-striped">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Nombre</th>
		        <th>Precio Unitario</th>
		        <th>Cantidad Stock</th>
		        <th>Acciones</th>
		      </tr>
		    </thead>
		    <tbody id="tblItems">
		    	<?php foreach ($articulos as $articulo) {
		   		echo "<tr>";
		   	    echo "<td>" .$articulo['eIdProducto']. "</td>";
		   	    echo "<td>" .$articulo['txtNomProd']. "</td>";
		   	    echo "<td>" .$articulo['ePrecioVenta']. "</td>";
		   	    echo "<td>" .$articulo['eStock']."</td>";
		   	    echo "<td>";
		   	    echo "<button class='btnEdit' onclick='editProduct(".$articulo['eIdProducto']. ")'>Editar</button>";
		   	    echo "<button class='btnDelete' onclick = 'activate(" .$articulo['eIdProducto']. ",0);'>Eliminar</button>";
		   	    echo "<button class='";
		   	    if($articulo['bActivo'] == 1 )
		   	    	echo "btnActivo";
		   	    else
		   	    	echo "btnInactivo";
	   	    	echo "' onclick = 'activate(" .$articulo['eIdProducto']. ",1);'>Activo</button>";
		   		echo "</td>";
		   	  	echo "</tr>";
		    	} ?>
		      
		      
		      
		    </tbody>
		  </table>
	</div>
	

</main>
<style type="text/css">
	.varios{
		display: flex;
		flex-wrap: wrap;
		width: 95%;
		border:  2px solid yellow;
		height: 300px;
	}
	.item{
		width: 35%;
		margin: 1%;
		border:  1px solid black;
		height: 60px;
	}
	.item2{
		width: 60%;
		margin: 1%;
		border:  1px solid red;
		height: 60px;
	}

</style>
<script>
	/*function nwProducto(){
		$('#addProduct').modal('show');
	}*/
	function activate(id,acc){
		var obj = {};
		obj.id = id;
		obj.acc = acc;
		axios.post("<?php echo site_url('udtActP') ?>", obj
		).then(function(res){
		    if (res.status == 200) {

		      window.location = "<?php echo site_url('articulos') ?>";
		    }

		  }).catch(function(err){

		    alet(err);
		    console.log(err);
		  });
	}
	function editProduct(id){
		var obj = {};
		obj.id = id;
		axios.post("<?php echo site_url('getProduct') ?>", obj
		).then(function(res){
		    if (res.status == 200) {
		    	var obj = res.data;
		      	editName.value =obj.txtNomProd;
		      	editPrice.value=  obj.ePrecioVenta;
		      	editStock.value = obj.eStock;
		      	idProd.value = obj.eIdProducto;
		   		$('#editProduct').modal('show');

		    }

		  }).catch(function(err){

		    alert(err);
		    console.log(err);
		  });
	}
</script>