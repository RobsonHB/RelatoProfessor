<?php
	require 'banco.php';
?>
<!DOCTYPE html>
<html lang="pt_br" >

<head>
	<title>HELP Professor - UNINOVE</title>
	<meta charset="UTF-8">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/open-iconic.min.css">
	<link rel="stylesheet" href="style1.css">
</head>

<body>
<br>
	<div class="container">  
		<div class="jumbotron">
	 		<a href="index.html"  class="btn btn-dark">Voltar</a><br><br>
	 	<center><img src="media/PROF_HELP.png" alt="uninove" height="115" width="380"></center>  <br> 
	 	
	   	

	   	
		<center><h2>Professor(a), pedimos a gentileza que avalie o nosso atendimento</h2></center> <br>

		<form   method="POST">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xl-12 col-sm-12">
					    <div class="row">
							<div class="col-md-6 col-xl-6 col-sm-6 offset-md-3 offset-xl-3 offset-md-3">
								<div class="form-group">
								  	<center><label class="form-control-lg">Digite o protocolo de atendimento</label></center>
									<input id="form_lastname" type="text" name="protocolo" class="form-control form-control-lg border border-dark" placeholder="N° do protocolo" required="">
									<?php if(!empty($protocoloErro)): ?>
									<span class="help-inline"><?php echo $protocoloErro;?></span>
									<?php endif;?>
								</div>
							</div>
						</div><br><br>

						<center><h6>Nota de 1 a 5</h6></center>

						<div class="d-flex justify-content-center my-15">

							<input type="range" name="avaliacao" min="1" max="5" /><br><br><br><br>

							 <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
						</div>
						
						<center><img src="img/estrela.png" alt="estrelas" height="45" width="265"></center><br>
						
						<div class="row">
					       	<div class="col-md-12 col-xl-12 colsm-12">
					          	<div class="text-center">
					           		<input type="submit" class="btn btn-success btn-lg" value="Avaliar">
								</div>
					       	</div>
					    </div>
					</div>
				</div>  
			</div>  
		</form> 
	</div>
	</div>

	<?php 
	    if(!empty($_REQUEST))
	    {

	      	$avaliacao = $_REQUEST['avaliacao'];
			$protocolo = $_REQUEST['protocolo'];
	        
	       
	        $validacao = true;
	        
	        if(empty($protocolo))
	        {
	            $protocoloErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	        
	        if(empty($avaliacao))
	        {
	            $tb_matriculaErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	        
	        $status = 'Concluido';
		   


	        if($validacao)
	        {
	            $pdo = Banco::conectar();
	            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $sql = "UPDATE help_infra set avaliacao = ?, status = ? WHERE id = ?";
	            $q = $pdo->prepare($sql);

	             $q->execute(array($avaliacao, $status, $protocolo));
	            
				 Banco::desconectar();

				echo "<script> 
					
					alert('OBRIGADO! PELA SUA AVALIAÇÃO');
				
				</script>";
	        }
	    }
	?>

</body>
</html>

<script type="text/javascript">
	function redireciona(){
		alert('OBRIGADO! PELA SUA AVALIAÇÃO');
		setTimeout("window.location='index.html'", 10);
		
	}
				
</script>
