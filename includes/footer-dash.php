

  <script   src="includes/js/bootstrap.bundle.min.js"></script> 
  <script src="includes/js/offcanvas.js"></script>
  
 
  <script>
 M.AutoInit();

 
 document.addEventListener('DOMContentLoaded', function(e){
var elems = document.querySelectorAll('.slider');
var options=0;
var instances = M.Slider.init(elems, options);
 });



 document.addEventListener('DOMContentLoaded', function(e){
var elems = document.querySelectorAll('.carousel');
var options=0;
var instances = M.Carousel.init(elems, options);
 });

 
 
 document.addEventListener('DOMContentLoaded', function(e){
var elems = document.querySelectorAll('.dropdown-trigger');
var options=0;
var instances = M.Dropdown.init(elems, options);
 }); 
 </script>



<div class="modal fade" id="ModalEliminarForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_formulario.php?id=<?php echo $_POST['um-formulario']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarFormLabel"> Eliminar Formulário </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar a mensagem de "<?php echo $_POST['um-formulario']['nome'] ?>" ?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalEliminarCompra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarCompraLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_compra.php?id=<?php echo $_POST['uma-compra']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarCompraLabel"> Eliminar compra </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar o histórico de compra de "<?php echo $_POST['uma-compra']['cliente'] ?>" ?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalEliminarEmailMark" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarEmailMarkLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_email_mark.php?id=<?php echo $_POST['um-email-mark']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarEmailMarkLabel"> Eliminar email marketing </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar o email "<?php echo $_POST['um-email-mark']['email'] ?>" ?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalEliminarCategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarCategoriaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_categoria.php?id=<?php echo $_POST['categoria']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarCategoriaLabel"> Eliminar categoria </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar a categoria "<?php echo $_POST['categoria']['nome'] ?>" e todas as suas subcategorias e produtos?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalEliminarSubcategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarSubcategoriaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_subcategoria.php?id=<?php echo $_POST['subcategoria']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarSubcategoriaLabel"> Eliminar subcategoria </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar a subcategoria "<?php echo $_POST['subcategoria']['nome'] ?>" e todos os seus produtos?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalEliminarProduto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_produto.php?id=<?php echo $_POST['produto']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarProdutoLabel"> Eliminar Produto </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p> Tem certeza que deseja eliminar o produto "<?php echo $_POST['produto']['nome'] ?>" e todas as suas variações?</p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-deletar"  class="btn btn-primary">Deletar</button>
      </div>
    </form>
  </div>
</div>

 
<div class="modal fade" id="ModalNovaCompra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/create_historico_compra.php"  method="POST" >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel"> Nova Compra </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row px-1">
          
        
      
          <div class="col input-field mb-3">
            <div class="form-floating mb-3">
            <input type="text" name="cliente" id="cliente" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Cliente</label>
          </div>
          <div class="col input-field mb-3">
              <div class="form-floating mb-3">
                <select type="text" name="id_produto" id="id_produto"  required class="form-select form-control form-select-sm validate" >
                  <?php 

                  $sql2="select * from produto";
                  $resultado2 = mysqli_query($connect, $sql2);

                  if(mysqli_num_rows($resultado2) > 0):
                  while($dados2 = mysqli_fetch_array($resultado2)): 
                  ?>
                  <option class=""  value="<?php echo $dados2['id'] ?>"><?php echo $dados2['nome'] ?></option> 
                  <?php 
                  endwhile;
                  endif;
                  ?>
                </select>
               <label for="floatingGenero">Produto</label>
              </div>  
            </div>
          
          <div class="col input-field ">
            <div class="form-floating mb-3">
            <input type="datetime-local"  name="data_de_compra" id="data_de_compra" required class="form-control form-control-sm validate">
            <label for="floatingGenero">Data de compra</label>
          </div>

      
          
          
        </div>
       
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
</div> 



</body>
</html>
