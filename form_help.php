<!DOCTYPE html>
<html lang="pt_br" >

<head>
<meta charset="UTF-8">
  
  <title>Central de Report - Uninove</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.2.0/metisMenu.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">  
 <br>
 <br>
 <center><img src="media/PROF_HELP.png" alt="uninove" height="115" width="380"></center>   
 <a href="index.html"  class="btn btn-primary">Voltar</a>
   
   <hr>
<p>
<center><h4>Relate o seu problema:</h4></center> 
</p>
 
 
 <br>
 <br>
 
 
 
    
<form id="contact" action="form_help.php" method="POST">
 <div class="container">


<div class="row">
<div class="col-md-12 col-xl-12 col-sm-12 offset-xl-2 py-5">


        <div class="row">
			<div class="col-md-12 col-xl-12 col-sm-12">
				 <div class="col-md-6 col-xl-6 col-sm-6">
					<div class="form-group">
						  <label for="form_name">Nome *</label>
						  <input id="form_name" type="text" name="nome_professor" class="form-control" placeholder="Nome do Professor (a)" required="" value="<?php echo !empty($nome_professor)?$nome_professor: '';?>">
												<?php if(!empty($nome_professorErro)): ?>
												<span class="help-inline"><?php echo $nome_professorErro;?></span>
												<?php endif;?>
					  </div>
				  </div>
				  <div class="col-md-6 col-xl-6 col-sm-6">
					  <div class="form-group">
						  <label for="form_lastname">Matricula</label>
						  <input id="form_lastname" type="text" name="matricula" class="form-control" placeholder="N° da matricula" required="" value="<?php echo !empty($matricula)?$matricula: '';?>">
												<?php if(!empty($matriculaErro)): ?>
												<span class="help-inline"><?php echo $matriculaErro;?></span>
												<?php endif;?>
					  </div>
				  </div>
				</div>
        </div>
		  

                 
  <div class="row">
		  <div class="col-md-12 col-xl-12 colsm-12">
			<div class="col-md-12 col-xl-12 colsm-12">
                  <div class="form-group <?php echo !empty($unidadeErro)?'error ': '';?>">
                  <div class="form-group">
					  <label for="form_need">Unidade</label>
                    
												<td><select type="text" placeholder="Selecione" name='unidade' class='form-control'>	
													<option>Selecione...</option>
													<option>Bauru</option>
													<option>Vegueiro</option>
													<option>Santo Amaro</option>
													<option>Vila Maria</option>
													<option>Vila Prudente</option>
													<option>Memorial - A</option>
													<option>Memorial - D</option>
													<option>Mauá</option>
													<option>Mauá II</option>   
													<option>Guarulhos I</option>
													<option>Guarulhos II</option>
													<option>Osasco</option>
													<option>Osasco II</option>
													
													</select></td>
										</div>
									</div>
              </div>
				    <div class="row">
		  <div class="col-md-12 col-xl-12 colsm-12">
			<div class="col-md-12 col-xl-12 colsm-12">
                  <div class="form-group <?php echo !empty($predioErro)?'error ': '';?>">
                  <div class="form-group">
					  <label for="form_need">Prédio</label>
                    
												<td><select type="text" placeholder="Selecione" name='predio' class='form-control'>	
													<option>Selecione...</option>
													<option>A</option>
													<option>B</option>
													<option>C</option>
													<option>D</option>
													<option>E</option>
													<option>F</option>
													<option>G</option>
													<option>H</option>
													<option>I</option>
													<option>J</option>
													<option>L</option>
													<option>M</option>
													<option>N</option>
													<option>O</option>
													<option>P</option>
													<option>Q</option>
													
													</select></td>
										</div>
									</div>
              </div>
		  


		  <div class="row">
		  <div class="col-md-12 col-xl-12 colsm-12">
			<div class="col-md-12 col-xl-12 colsm-12">
                  <div class="form-group <?php echo !empty($andarErro)?'error ': '';?>">
                  <div class="form-group">
					  <label for="form_need">Andar</label>
                    
												<td><select type="text" placeholder="Selecione" name='andar' class='form-control'>	
													<option>Selecione...</option>
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
													<option>5SS</option>
													<option>6SS</option>
													
													</select></td>
										</div>
									</div>
              </div>

			 
		  <div class="row">
		  <div class="col-md-12 col-xl-12 colsm-12">
			<div class="col-md-12 col-xl-12 colsm-12">
                  <div class="form-group <?php echo !empty($salaErro)?'error ': '';?>">
                      <div class="form-group">
					  <label for="form_need">Sala de Aula</label>
                    
												<td><select type="text" placeholder="Selecione" name='sala' class='form-control'>	
													<option>Selecione...</option>
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
		  </div>
		
		  <div class="col-md-12 col-xl-12 colsm-12">
			<div class="col-md-12 col-xl-12 colsm-12">
                  <div class="form-group <?php echo !empty($problemaErro)?'error ': '';?>">
                       <div class="form-group">
					  <label for="form_need">Serviço que deseja Auxilio</label>
                    
												<td><select type="text" placeholder="Selecione" name='problema' class='form-control'>	
													<option>Selecione...</option>
													<option>Abri/Fechar Porta</option>
													<option>Ligar/Desligar projetor</option>
													<option>Aumentar volume</option>
													<option>Wi-Fi</option>
													<option>Chromebook</option>
													<option>Tomadas</option>
													<option>Ventiladores</option>
													
													</select></td>
										</div>
									</div>
              </div>
		
		  <br>
		   <br>

          <div class="row">
              <div class="text-center">
                  <input type="submit" class="btn btn-danger btn-lg" value="Solicitar Auxilio">
				</div>
             </div>
          </div>
          
      </div>
  
    </form>
      
  </div>
  
  </div>

</div>


<?php
    require 'banco.php';
    
    if(!empty($_REQUEST))
    {
       //Acompanha os erros de validação
        $nome_professorErro = null;
        $matriculaErro = null;
        $unidadeErro = null;
        $predioErro = null;
		$andarErro = null;
		$salaErro = null;
		$problemaErro = null;
		
		
		
         $nome_professor= $_REQUEST['nome_professor'];
        $matricula    = $_REQUEST['matricula'];
        $unidade = $_REQUEST['unidade'];
        $predio = $_REQUEST['predio'];
        $andar = $_REQUEST['andar'];
		$sala = $_REQUEST['sala'];
		$problema = $_REQUEST['problema'];
		
       
        
       // Validaçao dos campos:
       
        $validacao = true;
        
        if(empty($nome_professor))
        {
            $nome_professorErro = 'Por favor digite o campo';
            $validacao = false;
        }
        
        if(empty($matricula))
        {
            $matriculaErro = 'Por favor digite o campo';
            $validacao = false;
        }
        
        if(empty($unidade))
        {
            $unidadeErro = 'Por favor digite o campo';
            $validacao = false;
        }
        
				
        if(empty($predio))
        {
            $predioErro = 'Por favor digite o campo';
            $validacao = false;
        }
      
	   if(empty($andar))
        {
            $andarErro = 'Por favor digite o campo';
            $validacao = false;
        }
	  
	  if(empty($sala))
        {
            $salaErro = 'Por favor digite o campo';
            $validacao = false;
        }
	   
	   
	   if(empty($problema))
        {
            $problemaErro = 'Por favor digite o campo';
            $validacao = false;
        }
	   
	   
	 
        
        //Inserindo no Banco:
        if($validacao)
        {
              $pdo = Banco::conectar();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO help_infra (nome_professor, matricula, unidade, andar, predio, sala, problema) VALUES(?,?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
             $q->execute(array($nome_professor, $matricula, $unidade, $andar, $predio, $sala, $problema));
            
			 Banco::desconectar();
            //header("Location:index.html");
			echo "<script> alert('INFRA ACIONADA, POR FAVOR, AGUARDE!!!');</script>";
        }
    }
 ?>