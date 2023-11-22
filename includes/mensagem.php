
<script>
//Mensagem no toast
window.onload = function(){
M.toast({html: '<?php echo "Olá!!"; ?>' });
}
</script>
<?php

//sessao
session_start();

//verificando se tem mensagem ou se ela sequer existe né
if(isset($_SESSION['mensagem'])): ?>

    <script>
        //Mensagem no toast
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>' });
    }
    </script>
<?php

endif; 

if(isset($_SESSION['id'])): ?>

    <script>
        //Mensagem no toast
    window.onload = function(){
        M.toast({html: '<?php echo "Id".$_SESSION['id']; ?>' });
    }
    </script>
<?php

endif; 

?>