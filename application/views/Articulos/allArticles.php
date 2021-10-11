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
		background-color: green;
		font-size: 1vw;
		color: white;
	}
	.btnDelete{
		border-radius: 5px;
		border: 1px outset lightgray;
		background-color: red;
		font-size: 1vw;
		color: white;
	}

</style>
<main>
	<div id="addArticle">
		<button class="btnAdd">Agregar Artículo</button>
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
		      <tr>
		        <td>1</td>
		        <td>Goma</td>
		        <td>2.80</td>
		        <td>15</td>
		        <td>
		        	<button class="btnEdit">Editar</button>
		        	<button class="btnDelete">Eliminar</button>
		    	</td>
		      </tr>
		       <tr>
		        <td>2</td>
		        <td>Lápiz</td>
		        <td>.80</td>
		        <td>10</td>
		        <td>
		        	<button class="btnEdit">Editar</button>
		        	<button class="btnDelete">Eliminar</button>
		    	</td>
		      </tr>
		      
		    </tbody>
		  </table>
	</div>
	<div class="varios">
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item2"></div>
		<div class="item2"></div>
		<div class="item"></div>
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
	function fillArticles(){
		/*Rellenado de tabla*/
	}
</script>