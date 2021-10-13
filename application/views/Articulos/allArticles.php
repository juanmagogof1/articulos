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
		<button class="btnAdd" onclick="nwProducto();">Agregar Artículo</button>
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
		   	    echo "<button class='btnEdit'>Editar</button>";
		   	    echo "<button class='btnDelete'>Eliminar</button>";
		   	    echo "<button class='";
		   	    if($articulo['bActivo'] == 1 )
		   	    	echo "btnActivo";
		   	    else
		   	    	echo "btnInactivo";
	   	    	echo "'>Activo</button>";
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
	function nwProducto(){
		$('#addProduct').modal('show');
	}
</script>