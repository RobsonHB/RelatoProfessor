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
