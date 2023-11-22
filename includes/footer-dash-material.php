

  <script   src="includes/js/bootstrap.bundle.min.js"></script>
  <script  src="includes/js/materialize.min.js"></script>
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
/*
 $(document).ready(function(){
   $('.slider').slider();
 });
*/
 </script>
<script> 

var formOp;
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
} 
 
  function novoAdmin() {
    createCookie('admin-op', 'novo', 1);
  
  } 
  function verAdmin(admin) {
 
    createCookie('admin-op', 'ver', 1);
    createCookie('admin-op-user', admin, 1);
  
  } 

  
</script>


<!-- 
<div class="modal fade" id="ModalEditarForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEditarFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEditarFormLabel"> <?php echo $_POST['um-formulario']['nome'] ?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row px-2"> 

        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="nome" id="nome" value="<?php echo $_POST['um-formulario']['nome'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Cliente</label>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="email" id="email" value="<?php echo $_POST['um-formulario']['email'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Email</label>
        </div>
        </div>
        
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="empresa" id="empresa" value="<?php echo $_POST['um-formulario']['empresa'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Empresa</label>
        </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="assunto" id="assunto" value="<?php echo $_POST['um-formulario']['assunto'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Assunto</label>
        </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="mensagem" id="mensagem" value="<?php echo $_POST['um-formulario']['mensagem'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Mensagem</label>
          </div>
        </div>

      </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" type="submit" name="btn-editar-form" class="btn btn-primary">Concluir</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalNovaCompra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/create_historico_compra.php"  method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Nova compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        

         
        
      <div class="row px-1">
        
      
     
        <div class="col input-field mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="cliente" id="cliente" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Cliente</label>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="text" name="id_produto" id="id_produto" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Produto</label>
        </div>
        <div class="col input-field ">
          <div class="form-floating mb-3">
          <input type="datetime-local"  name="data_de_compra" id="data_de_compra" required class="form-control form-control-sm validate">
          <label for="floatingGenero">Data de compra</label>
        </div>

    
        
        
      </div>


      </div>
 
      </div>
      <div class="modal-footer mt-3 ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </form>
</div>
<div class="modal fade" id="ModalMensagem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/create_historico_compra.php"  method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Nova compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        

         
        
      <div class="row px-1">
        
      
     
        <div class="col input-field mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="cliente" id="cliente" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Cliente</label>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="text" name="id_produto" id="id_produto" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Produto</label>
        </div>
        <div class="col input-field ">
          <div class="form-floating mb-3">
          <input type="datetime-local"  name="data_de_compra" id="data_de_compra" required class="form-control form-control-sm validate">
          <label for="floatingGenero">Data de compra</label>
        </div>

    
        
        
      </div>


      </div>
 
      </div>
      <div class="modal-footer mt-3 ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </form>
</div>
<div class="modal fade" id="ModalAddCategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEditarFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEditarFormLabel"> Nova Categoria </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row px-2"> 

        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="nome" id="nome" value="<?php echo $_POST['um-formulario']['nome'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Cliente</label>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="email" id="email" value="<?php echo $_POST['um-formulario']['email'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Email</label>
        </div>
        </div>
        
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="empresa" id="empresa" value="<?php echo $_POST['um-formulario']['empresa'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Empresa</label>
        </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="assunto" id="assunto" value="<?php echo $_POST['um-formulario']['assunto'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Assunto</label>
        </div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="mensagem" id="mensagem" value="<?php echo $_POST['um-formulario']['mensagem'] ?>" class="form-control form-control-sm " />
          <label for="floatingGenero">Mensagem</label>
          </div>
        </div>

      </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" type="submit" name="btn-editar-form" class="btn btn-primary">Concluir</button>
      </div>
    </div>
  </div>
</div>

-->
<!--
<div class="modal fade" id="ModalDeletarAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/updateAdmin.php"  method="POST" class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Eliminar conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-0 pb-0 ">
        

      <?php 
       $sql="select * from admin where id=".$_SESSION['id'];
       $resultado = mysqli_query($connect, $sql);

       if(mysqli_num_rows($resultado) > 0):
       while($dados = mysqli_fetch_array($resultado)):
      
      ?>
         
        
         <p> Tem ceterza que deseja eleminar a conta de "<?php echo $dados['nome']." ".$dados['sobrenome'] ?>" ?</p>
    
      <?php
    endwhile; 

  endif;
    ?>
      </div>
 
      </div>
      <div class="modal-footer mt-3 mb-0 pb-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-editarAdmin"  class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </form>
</div> -->
<!--
<div class="modal fade" id="ModalNovoAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  <?php  if($_SESSION['admin-op'] == "novo"): ?>
    <form  action="php_action/createAdmin.php"  method="POST" class="modal-content ">
    <?php  endif; ?>
  <?php  if($_SESSION['admin-op'] == "editar"): ?>
    <form  action="php_action/updateAdmin.php"  method="POST" class="modal-content ">
    <?php  endif; ?>
  <?php  if($_SESSION['admin-op'] == "ver"): ?>
    <form  action="php_action/updateAdmin.php"  method="POST" class="modal-content ">
    <?php  endif; ?>
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel"> 
          <?php  
          if($_SESSION['admin-op'] == "novo")
          echo "Novo Administrador";

          if($_SESSION['admin-op'] == "editar")
          echo "Editar Informações";
          
          if($_SESSION['admin-op'] == "deletar")
          echo "Deletar conta";
          
          if($_SESSION['admin-op'] == "ver")
          echo $_SESSION['admin-op-user']['nome']." ".$_SESSION['admin-op-user']['sobrenome'];
           
          
          ?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-0 pb-0 ">

      <?php  

        switch ($_SESSION['admin-op']) {
          case 'novo':
            ?>
            <div class="row px-1">  
              <div class="col input-field mb-3">
                <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" required class="form-control form-control-sm validate" />
                <label for="floatingGenero">Nome</label>
              </div>
              <div class="col input-field mb-3">
                <div class="form-floating mb-3">
                <input type="text" name="sobrenome" id="sobrenome" required class="form-control form-control-sm validate" />
                <label for="floatingGenero">Sobrenome</label>
              </div> 
              <div class="col">
                <div class="form-floating mb-3">
                <input type="email" name="email" id="email" required class="form-control form-control-sm validate" />
                <label for="floatingGenero">Email</label>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                <input type="password" name="senha" id="senha" required class="form-control form-control-sm validate" />
                <label for="floatingGenero">Senha</label>
              </div>  
            </div>
            <?php
            break;  
          case 'ver':
            ?>
            <div class="row px-1">  
              <div class="col input-field mb-3">
                <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" required value="<?php echo $adminVer['nome'] ?>" class="form-control form-control-sm validate" />
                <label for="floatingGenero">Nome</label>
              </div>
              <div class="col input-field mb-3">
                <div class="form-floating mb-3">
                <input type="text" name="sobrenome" id="sobrenome" required value="<?php echo $adminVer['sobrenome'] ?>" class="form-control form-control-sm validate" />
                <label for="floatingGenero">Sobrenome</label>
              </div> 
              <div class="col">
                <div class="form-floating mb-3">
                <input type="email" name="email" id="email" required value="<?php echo $adminVer['email'] ?>" class="form-control form-control-sm validate" />
                <label for="floatingGenero">Email</label>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                <input type="password" name="senha" id="senha"  class="form-control form-control-sm validate" />
                <label for="floatingGenero">Senha</label>
              </div>  
            </div>
            <?php
            break; 
            
       
          default:
            # code...
            break;

              
        }
          
         ?>
        
 
 
      </div>
      <div class="modal-footer mt-3 mb-0 pb-0">
      <?php  if($_SESSION['admin-op'] == "novo"): ?>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      <?php  endif; ?>
      <?php  if($_SESSION['admin-op'] == "ver"): ?>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> 
        <button type="submit"  name="btn-editarAdmin"  class="btn btn-primary">Editar</button>
      <?php  endif; ?>
      </div> 
    </form>
</div>
</div>
<div class="modal fade" id="ModalEditAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/createAdmin.php"  method="POST" class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Editar Informações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-0 pb-0 "> 
        <div class="row px-1"> 
          <div class="col input-field mb-3">
            <div class="form-floating mb-3">
            <input type="text" name="nome" id="nome" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Nome</label>
          </div>
          <div class="col input-field mb-3">
            <div class="form-floating mb-3">
            <input type="text" name="sobrenome" id="sobrenome" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Sobrenome</label>
          </div> 
          <div class="col">
            <div class="form-floating mb-3">
            <input type="email" name="email" id="email" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Email</label>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
            <input type="password" name="senha" id="senha" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Senha</label>
          </div>  
        </div> 
      </div>
      <div class="modal-footer mt-3 mb-0 pb-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div> 
  </form>
</div>
</div>

<div class="modal fade" id="ModalNovaCompra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/create_historico_compra.php"  method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Nova compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        

         
        
      <div class="row px-1">
        
      
     
        <div class="col input-field mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="cliente" id="cliente" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Cliente</label>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="text" name="id_produto" id="id_produto" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Produto</label>
        </div>
        <div class="col input-field ">
          <div class="form-floating mb-3">
          <input type="datetime-local"  name="data_de_compra" id="data_de_compra" required class="form-control form-control-sm validate">
          <label for="floatingGenero">Data de compra</label>
        </div>

    
        
        
      </div>


      </div>
 
      </div>
      <div class="modal-footer mt-3  ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="ModalMensagem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalNovaCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form  action="php_action/create_historico_compra.php"  method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNovaCompraLabel">Nova compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        

         
        
      <div class="row px-1">
        
      
     
        <div class="col input-field mb-3">
          <div class="form-floating mb-3">
          <input type="text" name="cliente" id="cliente" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Cliente</label>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="text" name="id_produto" id="id_produto" required class="form-control form-control-sm validate" />
          <label for="floatingGenero">Produto</label>
        </div>
        <div class="col input-field ">
          <div class="form-floating mb-3">
          <input type="datetime-local"  name="data_de_compra" id="data_de_compra" required class="form-control form-control-sm validate">
          <label for="floatingGenero">Data de compra</label>
        </div>

    
        
        
      </div>


      </div>
 
      </div>
      <div class="modal-footer mt-3 ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit"  name="btn-cadastrar"  class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
</div> -->



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
<div class="modal fade" id="ModalEliminarCompra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="/php_action/deletar_compra.php?id=<?php echo $_POST['uma-compra']['id'] ?>"  method="POST"  >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEliminarFormLabel"> Eliminar compra </h5>
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
          <div class="col">
            <div class="form-floating mb-3">
            <input type="text" name="id_produto" id="id_produto" required class="form-control form-control-sm validate" />
            <label for="floatingGenero">Produto</label>
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
