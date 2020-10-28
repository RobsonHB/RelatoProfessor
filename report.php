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
 
    
<form id="contact" action="form_help.php" method="POST">
  
 <center><img src="media/PROF_HELP.png" alt="uninove" height="115" width="380"></center>   
   <center><h4>Preencha o formulario a baixo:</h4></center> 
   
<p>
<a href="index.html"  class="btn btn-primary">Voltar</a>
</p>
				
   <fieldset>
	<input class="form-control" name="nome_professor" type="text" placeholder="Nome professor (a)" required="" value="<?php echo !empty($nome_professor)?$nome_professor: '';?>">
												<?php if(!empty($nome_professor)): ?>
												<span class="help-inline"><?php echo $nome_professor;?></span>
												<?php endif;?>
	</fieldset>
    <fieldset>
      
	  <input class="form-control" name="matricula" type="text" placeholder="N° matricula" required="" value="<?php echo !empty($matricula)?$matricula: '';?>">
												<?php if(!empty($matriculaErro)): ?>
												<span class="help-inline"><?php echo $matriculaErro;?></span>
												<?php endif;?>

	
	
	</fieldset>
      <fieldset>
      <div class="control-group <?php echo !empty($unidadeErro)?'error ': '';?>">
										
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='unidade' class='form-control'>	
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
      <div class="control-group <?php echo !empty($predioErro)?'error ': '';?>">
										
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='predio' class='form-control'>	
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
	
	 <input class="form-control" name="sala" type="text" placeholder="N° Sala" required="" value="<?php echo !empty($sala)?$sala: '';?>">
												<?php if(!empty($salaErro)): ?>
												<span class="help-inline"><?php echo $salaErro;?></span>
												<?php endif;?>
	
	
       <fieldset>
      <div class="control-group <?php echo !empty($problemaErro)?'error ': '';?>">
									
										<div class="controls">
											<td><select type="text" placeholder="Selecione" name='problema' class='form-control'>	
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
        $nome_professor = null;
        $matriculaErro = null;
        $unidadeErro = null;
        $predioErro = null;
        $salaErro = null;
		$problemaErro = null;
		
		
		
        $nome_professor= $_REQUEST['tb_nome'];
        $matricula    = $_REQUEST['matricula'];
        $unidade = $_REQUEST['unidade'];
        $predio = $_REQUEST['predio'];
        $sala = $_REQUEST['sala'];
		$problema = $_REQUEST['problema'];
		
       
        
       // Validaçao dos campos:
       
        $validacao = true;
        
        if(empty($nome_professor))
        {
            $nome_professor = 'Por favor digite o campo';
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
             $sql = "INSERT INTO help_infra (nome_professor, matricula, unidade, predio, sala, problema) VALUES(?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
             $q->execute(array($nome_professor, $matricula, $unidade, $predio, $sala, $problema));
            
			 Banco::desconectar();
            //header("Location:cad_tarefa.php");
			echo "<script> alert('INFRA ACIONADA, POR FAVOR, AGUARDE!');</script>";
        }
    }
 ?>
  