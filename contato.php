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
        <form class="form-horizontal" action="src/enviaEmail.php" method="POST">
               <fieldset>
                    <legend><h4>Envie-me um email</h4></legend>
                        <div class="form-group">
                        <label for="inputNome" class="col-sm-1 control-label">Nome</label>
                            <div class="col-sm-8">
                            <input id="nome" type="text" name="nome" class="form-control input-md"  placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class ="form-group">
                            <label for="inputEmail" class="col-sm-1 control-label" >Email</label>
                            <div class="col-sm-8">
                                <input type="Email" class="form-control input-md" id="email" name="email">
                            </div>
                        </div>
                        <br>
                        <div class ="form-group">
                            <label for="inputTelefone" class="col-sm-1 control-label" >Telefone</label>
                            <div class="col-sm-8">
                                <input type="Tel" class="form-control input-md" id="telefone" name="telefone" placeholder="">
                                <span class="help-block">(xx)1111-1111 ou (xx)91111-1111</span>
                            </div>
                        </div>
                        <br>
                        <div class ="form-group">
                            <label for="inputMensagem" class="col-sm-1 control-label" >Mensagem</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Digite sua mensagem aqui!"></textarea>
                            </div>
                        </div>
                        <br>
                        
                        <div class="control-group">
                        	<!-- Button -->
                        	<div class="controls">
                        		<button class="btn btn-success">Enviar</button>
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