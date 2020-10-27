<!DOCTYPE html>
<html lang="pt" >

<head>
  <meta charset="UTF-8">
  <title>Portal Service Desk - UNINOVE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.2.0/metisMenu.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel='stylesheet' href=' https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css'> 
    <link rel="stylesheet" href="css/style.css">
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
</head>
<?php
	include 'banco.php';
    $pdo = Banco::conectar();
?>


  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
   <br>
        <img src="img/2uninove.png" alt="uninove"></center>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"></a>
      
	</div>
    <!-- /.navbar-header -->

   
  
  </nav>

<div class="container-fluid">


<br>
   
                   				
        
       <a href="http://localhost/help/index.html" <button type="button" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-plus-sign"></span> adicionar
        
		</button></a><br>
		<body onload="pisca()">
		<script>
		  function pisca() {
  var f = document.getElementById('pisca');
  setInterval(function() {
    f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
  }, 250);

document.getElementById('pisca').style.background="red" ;
 
 
 

}






</script>
    <style>
body {
  
  background-color: white;
  color: black;
 
}



tbody tr:hover {
    background-color: rgba(50,98,149,.3);
	
}


.dark-mode {
  background-color:#565656;
  color: white;
  tbody tr:hover {
    background-color: rgba(50,98,149,.3);
}

		

</style>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}


</script>

  
    <div class="row">
      <button type="checkbox"class="btn btn-default" onclick="myFunction()">Modo escuro</button>
	  <a class="btn btn-info" href="http://powerbiti.uninove.br/relatorio/powerbi/Service%20Desk/Relat%C3%B3rio%20de%20OS " target="_blank">Relatório</a>
	  <button type="button" class="btn btn-warning">
	Total: <span class="badge badge-light"></span>
							
				
					
               <?php 
 

                	$count=$pdo->prepare("SELECT * FROM db_help_infra"); 
                    $count->execute();
                    $variavel=$count->rowCount();
                    echo $variavel
					
					;
                ?> 
            </button>
	  <div class="col-lg-10">
        <h1 class="page-header">Dashboard Infra Estrutura</h1>
      </button>
	  </div>
	  
        
            <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-wifi fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?php 
                	$count=$pdo->prepare("SELECT * FROM tarefa WHERE status='Chamado externo' "); 
                	$count->execute();
					         $variavel=$count->rowCount();
					        echo $variavel;
                ?>
	
                </div>
                <div>WIFI CONEXÃO</div>
				
              </div>
            </div>
          </div>
          <a href="list_externo.php">
            <div class="panel-footer">
              <span class="pull-left"></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-chrome fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                	<?php 
                	$count=$pdo->prepare("SELECT * FROM tarefa WHERE status='concluida' "); 
                	$count->execute();
					        $variavel=$count->rowCount();
					        echo $variavel;
                ?>
 	
                </div>
                <div>CHROMEBOOK</div>
              </div>
            </div>
          </div>
          <a href="list_concluido.php">
            <div class="panel-footer">
              <span class="pull-left"></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
               <i class="fa fa-video-camera fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                	<?php
                    $count=$pdo->prepare("SELECT * FROM tarefa WHERE status='Em andamento'"); 
                    $count->execute();
                    $variavel=$count->rowCount();
                    echo $variavel;
                  ?>
                </div>
                <div>PROJETOR</div>
              </div>
            </div>
          </div>
          <a href="list_andamento.php">
            <div class="panel-footer">
              <span class="pull-left"></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>  
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-exclamation-triangle fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                	 <?php
                    $count=$pdo->prepare("SELECT * FROM tarefa WHERE status='Nao iniciada'"); 
                    $count->execute();
                    $variavel=$count->rowCount();
                    echo $variavel;
                    ?>
                </div>
                <div>APOIO</div>
              </div>
            </div>
          </div>
          <a href="list_naoiniciado.php">
            <div class="panel-footer">
              <span class="pull-left"></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
<br>

 <?php
$sql = "SELECT * FROM tarefa";
 
 ?> 

	
                <h3>ACOMPANHAMENTO DE CHAMADOS</h3>
           
        
       
            <div class="huge"></div>
              <div class="huge">
                            
                </div>

                    <table  id="minhaTabela" class="table ">
					<thead>
                        <tr>
						    <th>ID</th>
                            <th>Professor</th>
                            <th>Matricula</th>
							<th>Unidade</th>
							<th>Prédio</th>                            
                            <th>Sala</th>
                            <th>Serviço</th>
							<th>Alarme</th>
						</tr>
                    </thead>
                    <tbody>
				
                        <?php
                        
                        $sql = 'SELECT * FROM db_help_infra ORDER BY id DESC';
                        
                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['tb_nome'] . '</td>';
							echo '<td>'. $row['tb_matricula'] . '</td>';
							echo '<td>'. $row['tb_unidade'] . '</td>';
                            echo '<td>'. $row['tb_predio'] . '</td>';
							echo '<td>'. $row['tb_sala'] . '</td>';
							echo '<td>'. $row['tb_servico'] . '</td>';
							
							
							echo '<td width=70>';
                      
                            if($row['tb_status'] == 'Concluida'){
                                echo '<a class="btn btn-success"> Finalizada</a>';
                            }
                              
                            
                            else{
                            
                                
                                echo '<a class="pisca" id="pisca" href="update.php?id='.$row['id'].'">&nbspAtualizar&nbsp   </a>';}
					
							echo ' ';
						 
						 echo '</td>';
                        }
                        
                        ?>
                    </tbody>                   
                </table>   
	
</div>
        </div>
        </div>

        <?php
        	Banco::desconectar();
        ?>
	
    </body>
</html>
