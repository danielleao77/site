<?php
include 'template/top.php';

?>

<form class="form-horizontal" action="" method="POST">
	<fieldset>
		<div id="legend"></div>
		<div class="control-group">
			<label class="control-label" for="email">E-mail</label>
			<div class="controls">
				<input type="text" id="username" name="email" placeholder=""
					class="input-xlarge">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="password">Senha:</label>
			<div class="controls">
				<input type="password" id="password" name="senha" placeholder=""
					class="input-xlarge">
			</div>
		</div>


		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button class="btn btn-success">Login</button>
			</div>
		</div>
		<div class="alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo ( isset( $erro ) ) ? $erro : ''?>
        </div>
	</fieldset>
</form>


<?php

if ($_POST) {
    include_once 'banco/config.php';
    $obj = Banco::instanciar();
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    if ($email && $senha) {
     
    }
    print_r($obj);
   echo $email;
echo $senha; 
}



include 'template/footer.php';



