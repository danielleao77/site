<?php
require_once '/template/top.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        
    </head>
    <body>
    <div class="container-full">
        <div class="jumbotron">
        <form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>Teste</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="mensagem" name="mensagem">Digite sua Mensagem aqui!</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>
        
        </div>
    </div>
</body>
</html>



<?php include_once 'template/footer.php';

if ($_POST) {
    var_dump($_POST);
}

?>  