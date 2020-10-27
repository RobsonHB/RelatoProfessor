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
<link rel="stylesheet" href="css/style1.css">
</head>
<body>

<div class="container">  
 
    
<form id="contact" action="report.php" method="POST">
  
 <center><img src="media/PROF_HELP.png" alt="uninove" height="115" width="380"></center>   
   <center><h4>Preencha o formulario a baixo:</h4></center> 
   
<p>
<a href="index.html"  class="btn btn-primary">Voltar</a>
</p>
				
   <fieldset>
	<input class="form-control" name="tb_nome" type="text" placeholder="Nome professor (a)" required="" value="<?php echo !empty($tb_nome)?$tb_nome: '';?>">
												<?php if(!empty($tb_nomeErro)): ?>
												<span class="help-inline"><?php echo $tb_nomeErro;?></span>
												<?php endif;?>
	</fieldset>
    <fieldset>
      
	  <input class="form-control" name="tb_matricula" type="text" placeholder="N° matricula" required="" value="<?php echo !empty($tb_matricula)?$tb_matricula: '';?>">
												<?php if(!empty($tb_matriculaErro)): ?>
												<span class="help-inline"><?php echo $tb_matriculaErro;?></span>
												<?php endif;?>

	
	
	</fieldset>
      <fieldset>
      <div class="control-group <?php echo !empty($tb_unidadeErro)?'error ': '';?>">
										
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='tb_unidade' class='form-control'>	
												<option>Unidade</option>
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
          
          <fieldset><br>
      <div class="control-group <?php echo !empty($tb_predioErro)?'error ': '';?>">
										
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='tb_predio' class='form-control'>	
												<option>Prédio</option>
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
											</select></td>
										</div>
									</div>
    </fieldset>
    </fieldset>
	
	 <input class="form-control" name="tb_sala" type="text" placeholder="N° Sala" required="" value="<?php echo !empty($tb_sala)?$tb_sala: '';?>">
												<?php if(!empty($tb_salaErro)): ?>
												<span class="help-inline"><?php echo $tb_salaErro;?></span>
												<?php endif;?>
	
	
       <fieldset>
      <div class="control-group <?php echo !empty($tb_servicoErro)?'error ': '';?>">
									
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='tb_servico' class='form-control'>	
												<option>Serviço afetado</option>
												<option>Laboratório de informatica</option>
												<option>Projetores</option>
												<option>Sala do Futuro</option>
												<option>WI-FI</option>
                                                <option>Outros</option>	
											</select></td>
										</div>
									</div>
    </fieldset>
    
         
		
      <fieldset>
	
	
      <button type="submit" class="btn btn-success ">Reportar</button>
    </fieldset>

 

 </form>
 
  
</div>
  
  
</body>

</html>
<?php
    require 'banco.php';
    
    if(!empty($_REQUEST))
    {
       //Acompanha os erros de validação
        $tb_nomeErro = null;
        $tb_matriculaErro = null;
        $tb_unidadeErro = null;
        $tb_predioErro = null;
        $tb_salaErro = null;
		$tb_servicoErro = null;
		
		
		
        $tb_nome= $_REQUEST['tb_nome'];
        $tb_matricula    = $_REQUEST['tb_matricula'];
        $tb_unidade = $_REQUEST['tb_unidade'];
        $tb_predio = $_REQUEST['tb_predio'];
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
	   
	   
	 
        
        //Inserindo no Banco:
        if($validacao)
        {
              $pdo = Banco::conectar();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO db_help_infra (tb_nome, tb_matricula, tb_unidade, tb_predio, tb_sala, tb_servico) VALUES(?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
             $q->execute(array($tb_nome, $tb_matricula, $tb_unidade, $tb_predio, $tb_sala, $tb_servico));
            
			 Banco::desconectar();
            //header("Location:cad_tarefa.php");
			echo "<script> alert('INFRA ACIONADA, POR FAVOR, AGUARDE!');</script>";
        }
    }
 ?>
  