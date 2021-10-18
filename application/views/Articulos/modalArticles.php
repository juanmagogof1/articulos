<!-- MODAL PARA AGREGAR PRODUCTO -->
<!-- The Modal -->
<div class="modal" id="addProduct">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregar Producto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Nombre Producto: </span>
          </div>
          <input type="text" class="form-control" id="nwProdName" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Precio Unitario: </span>
          </div>
          <input type="text" class="form-control" id="nwPre" required>
        
          <div class="input-group-prepend">
            <span class="input-group-text">Cantidad: </span>
          </div>
          <input type="number" class="form-control"  min="1" max="1000" id="nwCant" value="1" required>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success waves-effect" onclick="saveProd();">Guardar</button>
        <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>

<script>
  var prodName = document.getElementById('nwProdName');
  var prodPrice = document.getElementById('nwPre');
  var prodStock = document.getElementById('nwCant');
  function saveProd(){
      var obj = {};
      var cmp =0;
      if(prodName.value != ''){
        obj.name = prodName.value;
        cmp++;
      }
      else
        alert("Favor de escribir un nombre");
      if(prodPrice.value != ''){
        obj.price = prodPrice.value;
        cmp++;
      }
      else
        alert("Favor de escribir un precio");
      if(prodStock.value != ''){
        obj.stock = prodStock.value;
        cmp++;
      }
      else
        alert("Favor de escribir una cantidad de stock");
      if(cmp == 3){
        axios.post("<?php echo site_url('addArticle') ?>", obj
        ).then(function(res){
            if (res.status == 200) {

              window.location = "<?php echo site_url('articulos') ?>";
            }

          }).catch(function(err){

            alet(err);
            console.log(err);
          });
      }
  }
</script>

<!-- FIN MODAL PARA AGREGAR PRODUCTO -->

<!-- MODAL PARA EDITAR PRODUCTO -->

<!-- The Modal -->
<div class="modal" id="editProduct">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editar Producto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="hidden" id="idProd" disabled>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Nombre Producto: </span>
          </div>
          <input type="text" class="form-control" id="edProdName" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Precio Unitario: </span>
          </div>
          <input type="text" class="form-control" id="edPre" required>
        
          <div class="input-group-prepend">
            <span class="input-group-text">Cantidad: </span>
          </div>
          <input type="number" class="form-control"  min="1" max="1000" id="edCant" required>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success waves-effect" onclick="edProd();">Guardar</button>
        <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>

<script>
  var editName = document.getElementById('edProdName');
  var editPrice = document.getElementById('edPre');
  var editStock = document.getElementById('edCant');
  var idProd = document.getElementById('idProd');
  function edProd(){
      var obj = {};
      var cmp =0;
      obj.id = idProd.value
      if(editName.value != ''){
        obj.name = editName.value;
        cmp++;
      }
      else
        alert("Favor de escribir un nombre");
      if(editPrice.value != ''){
        obj.price = editPrice.value;
        cmp++;
      }
      else
        alert("Favor de escribir un precio");
      if(editStock.value != ''){
        obj.stock = editStock.value;
        cmp++;
      }
      else
        alert("Favor de escribir una cantidad de stock");

      if(cmp == 3){
        axios.post("<?php echo site_url('udpArticle') ?>", obj
        ).then(function(res){
            if (res.status == 200) {
              window.location = "<?php echo site_url('articulos') ?>";
            }

          }).catch(function(err){

            alet(err);
            console.log(err);
          });
      }
  }

</script>