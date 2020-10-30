<?php 
	
	require 'banco.php';

	$id = null;
	if ( !empty($_GET['id'])) 
            {
		$id = $_REQUEST['id'];
            }
	
	if ( null==$id ) 
            {
		header("Location: index.php");
            }
	
	if ( !empty($_POST)) 
            {
		
		$statusErro = null;
		$solucaoErro = null;	
		
	
      
	  
	    $status = $_POST['status'];
		$solucao = $_POST['solucao'];
		
		
		//Validação
		$validacao = true;
		if (empty($status)) 
                {
                    $statusErro = 'Selecione o status';
                    $validacao = false;
                }
		       	   
			   
		if (empty($solucao)) 
                {
                    $solucaoErro = 'Selecione uma opcao';
                    $validacao = false;
		} 
              
			
		
	
		// update data
		if ($validacao) 
                {
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE help_infra set status = ?, solucao =? WHERE id = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($status,$solucao,$id));
                    Banco::desconectar();
                    header("Location: list_geral.php");
		}
	} 
        else 
            {
                $pdo = Banco::conectar();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "SELECT * FROM help_infra where id = ?";
				$q = $pdo->prepare($sql);
				$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);
				$nome_professor = $data['nome_professor'];
				$matricula = $data['matricula'];
				$status = $data['status'];
				$problema = $data['problema'];
				$unidade= $data['unidade'];
				$predio = $data['predio'];
				$sala = $data['sala'];
				$data_finalizacao = $data['data_finalizacao'];
				
				
				Banco::desconectar();
	}
?>


<!DOCTYPE html>
<html lang="pt" >

<head>
	<meta charset="UTF-8">
	<title>INFRA PREDIAL - UNINOVE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
	<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.2.0/metisMenu.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style2.css">
</head>
<br><br><br><br>

<body>
    <div class="container">
        <div class="span10 offset1">
        	<div class="jumbotron">
        		<center><img src="img/uninove22.png"></center>
	    	    <div class="row">
	        	    <center><h3 class="well">ATUALIZAÇÃO DE CHAMADO</h3></center>
	            </div>
	             
	            <form class="form-horizontal" action="update2.php?id=<?php echo $id?>" method="post">
	                <div class="control-group <?php echo !empty($statusErro)?'error':'';?>">
	                	<label class="control-label">Atualizar status</label>
	                    <div class="controls"><br>
						  	<td><select type="text" placeholder="Status" name='status' class='form-control'>					
								<option></option>
								<option>Direcionado</option>
								<option>Em andamento</option>
								<option>Concluido</option>
							</select></td>
													
	                        <?php if (!empty($statusErro)): ?>
	                            <span class="help-inline"><?php echo $statusErro;?></span>
	                        <?php endif; ?>

	                    </div>
	                </div><br>
					<div class="control-group <?php echo !empty($solucaoErro)?'error':'';?>">
	                    <label class="control-label">Solução do chamado</label>
	                    <div class="controls"><br>
						    <td><select type="text" placeholder="Solução do Chamado" name='solucao' class='form-control'>	
								<option></option>												
								<option>Professor nao soube utilizar a ferramenta</option>
								<option>Professor esqueceu a senha</option>
								<option>Direcionado T.I</option>
							    <option>Direcionado Manutenção</option>
								<option>Professor foi orientado</option>
							</select></td>
													
	                        <?php if (!empty($solucaoErro)): ?>
	                            <span class="help-inline"><?php echo $solucaoErro;?></span>
	                        <?php endif; ?>
	                    </div>
	                </div><br>
	                     
	                <div class="form-actions text-right">
	                	<a href="list_geral.php" type="btn" class="btn btn-default">Voltar</a>
	                    <button type="submit" class="btn btn-success">Atualizar</button>
	                </div>
	            </form>
	        </div>
        </div>                 
    </div> 
  </body>
</html>

