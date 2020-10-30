<!DOCTYPE html>
<html lang="pt_br" >

<head>
	<title>HELP Professor- UNINOVE</title>
	<meta charset="UTF-8">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/open-iconic.min.css">
	<link rel="stylesheet" href="style1.css">

	<script>
		function AbrirJanela(){
    		window.open("avaliacao.php");	
		}
	</script>
</head>

<body>

	<div class="container">  
	 	<br><br>
	 	<center><img src="media/PROF_HELP.png" alt="uninove" height="115" width="380"></center>   
	 	<a href="index.html"  class="btn btn-dark">Voltar</a>
	   	<hr>
		<center><h2>Relate o seu problema</h2></center> 

		<form id="contact" action="form_help.php" method="POST">
			<div class="container">


				<div class="row">
					<div class="col-md-12 col-xl-12 col-sm-12">
					
						<form class="form-control" method="post" action="form_help.php" role="form">
				    		
					    	<div class="row">
								<div class="col-md-6 col-xl-6 col-sm-6">
									<div class="form-group">
										<label for="form_name" class="form-control-lg">Nome</label>
										<input id="form_name" type="text"name="tb_nome" class="form-control form-control-lg border border-dark" placeholder="Nome do Professor (a)" required value="<?php echo !empty($tb_nome)?$tb_nome: '';?>">
											<?php if(!empty($tb_nomeErro)): ?>
											<span class="help-inline"><?php echo $tb_nomeErro;?></span>
											<?php endif;?>
									  </div>
								  	</div>
								  	<div class="col-md-6 col-xl-6 col-sm-6">
									  	<div class="form-group">
										  	<label for="form_lastname" class="form-control-lg">Matricula</label>
										  	<input id="form_lastname" type="text" name="tb_matricula" class="form-control form-control-lg border border-dark" placeholder="N° da matricula" required value="<?php echo !empty($tb_matricula)?$tb_matricula: '';?>">
											<?php if(!empty($tb_matriculaErro)): ?>
											<span class="help-inline"><?php echo $tb_matriculaErro;?></span>
											<?php endif;?>
									  	</div>
								  	</div>
							    </div>              
					  				
					  			<div class="row">
									<div class="col-md-6 col-xl-6 col-sm-6">
					                	<div class="form-group" >
									  		<label for="form_need" class="form-control-lg" >Unidade</label>
											<td><select type="text" placeholder="Selecione" name='tb_unidade' class='form-control form-control-lg border border-dark' required>	
												<option></option>
												<option>Bauru</option>
												<option>Vergueiro</option>
												<option>Santo Amaro</option>
												<option>Vila Maria</option>
												<option>Vila Prudente</option>
												<option>Memorial A</option>
												<option>Memorial D</option>
												<option>Mauá</option>
												<option>Mauá II</option>   
												<option>Guarulhos I</option>
												<option>Guarulhos II</option>
												<option>Osasco</option>
												<option>Osasco II</option>
												<option>São Roque</option>
												<option>São Manuel</option>
											</select></td>
										</div>
					              	</div>
									<div class="col-md-6 col-xl-6 colsm-6">
					                	<div class="form-group">
									  		<label for="form_need" class="form-control-lg">Prédio</label>
					                   		<td><select type="text" placeholder="Selecione" name='tb_predio' class='form-control form-control-lg border border-dark'required>	
												<option></option>
											    <option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
												<option>E</option>
												<option>F</option>
												<option>G</option>
												<option>H</option>
												<option>J</option>
												<option>L</option>
												<option>M</option>
												<option>N</option>
												<option>O</option>
												<option>P</option>
												<option>Q</option>
												<option>A1</option>
												<option>A2</option>
												<option>A3</option>
											</select></td>
										</div>
					           		</div>
					           	</div>

							 	<div class="row">
									<div class="col-md-6 col-xl-6 colsm-6">
					                	<div class="form-group">
											<label for="form_need" class="form-control-lg">Andar</label>
					                   		<td><select type="text" placeholder="Selecione" name='tb_andar' class='form-control form-control-lg border border-dark' required>	
												<option></option>
												<option>Tr</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>   
												<option>11</option>
												<option>12</option>
												<option>13</option>
												<option>14</option>
												<option>15</option>
											    <option>1SS</option>
												<option>2SS</option>
												<option>3SS</option>
												<option>4SS</option>
											</select></td>
										</div>
					            	</div>
									<div class="col-md-6 col-xl-6 colsm-6">
						               	<div class="form-group">
											<label for="form_need" class="form-control-lg">Sala de Aula</label>
						                   	<td><select type="text" placeholder="Selecione" name='tb_sala' class='form-control form-control-lg border border-dark' required>	
												<option></option>
												<option>001</option>
												<option>002</option>
												<option>003</option>
												<option>004</option>
												<option>005</option>
												<option>006</option>
												<option>007</option>	
											</select></td>
										</div>
					            	</div>
					            </div>

							  	<div class="row">
									<div class="col-md-12 col-xl-12 colsm-12">
					                	<div class="form-group">
									  		<label for="form_need" class="form-control-lg">Serviço afetado</label>
					                   		<td><select type="text" placeholder="Selecione" name='tb_servico' class='form-control form-control-lg border border-dark' required>	
												<option></option>
												<option>Abrir/Fechar porta</option>
												<option>Projetor</option>
												<option>Mobiliario</option>
												<option>Tomada/Energia</option>
												<option>Iluminação</option>
												<option>Ar condicionado</option>
												<option>Vazamento</option>
												<option>Wi-Fi</option>
												<option>Chromebook</option>
												<option>Outros</option>					
											</select></td>
										</div>
					           		</div>
					           	</div><br><br>

					       		<div class="row">
					       			<div class="col-md-12 col-xl-12 colsm-12">
					          			<div class="text-center">
					           				<input type="submit" class="btn btn-danger btn-lg" value="Solicitar Auxilio">
										</div>
					       			</div>
					       		</div>
				       	</form>
				    </div>   
				</div>   
			</div>
		</form>
	</div>

	<?php
	    require 'banco.php';
	    
	    if(!empty($_REQUEST))
	    {
	       //Acompanha os erros de validação
	        $tb_nomeErro = null;
	        $tb_matriculaErro = null;
	        $tb_unidadeErro = null;
	        $tb_predioErro = null;
			$tb_andarErro = null;
			$tb_salaErro = null;
			$tb_servicoErro = null;
			
			
			
	        $tb_nome= $_REQUEST['tb_nome'];
	        $tb_matricula    = $_REQUEST['tb_matricula'];
	        $tb_unidade = $_REQUEST['tb_unidade'];
	        $tb_predio = $_REQUEST['tb_predio'];
	        $tb_andar = $_REQUEST['tb_andar'];
			$tb_sala = $_REQUEST['tb_sala'];
			$tb_servico = $_REQUEST['tb_servico'];
			
	       
	        
	       // Validaçao dos campos:
	       
	        $validacao = true;
	        
	        if(empty($tb_nome))
	        {
	            $tb_nomeErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	        
	        if(empty($tb_matricula))
	        {
	            $tb_matriculaErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	        
	        if(empty($tb_unidade))
	        {
	            $tb_unidadeErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	        
					
	        if(empty($tb_predio))
	        {
	            $tb_predioErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
	      
		   if(empty($tb_andar))
	        {
	            $tb_andarErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
		  
		  if(empty($tb_sala))
	        {
	            $tb_salaErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
		   
		   
		   if(empty($tb_servico))
	        {
	            $tb_servicoErro = 'Por favor digite o campo';
	            $validacao = false;
	        }
		   //COLOCAR PARA ABRIR UMA ABA AO INVES DE REDIRECIONAR
		   //session_start();
		   //$_SESSION['matricula'] = $tb_matricula;
	       //header("Location:index.html");
		 
	        $data = date('d-m-Y');
	        $hora = date('H:i:s');
	        $status = 'Nao iniciado';
	        $data_finalizacao = '';
	        //Inserindo no Banco:
	        if($validacao)
	        {
	              $pdo = Banco::conectar();
	             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	             $sql = "INSERT INTO help_infra (nome_professor, matricula, status, unidade, andar, predio, sala, problema, data_finalizacao, abertura, hora_abertura) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
	            $q = $pdo->prepare($sql);
	             $q->execute(array($tb_nome, $tb_matricula, $status, $tb_unidade, $tb_andar, $tb_predio, $tb_sala, $tb_servico, $data_finalizacao, $data, $hora));
	            
				 Banco::desconectar();
	            
				echo "<script> alert('INFRA FOI ACIONADA, POR FAVOR, AGUARDE!');</script>";
				echo "<script>AbrirJanela()</script>";
				
	        }
	    }
	 ?>
	</body>
</html>