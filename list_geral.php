<?php
  include 'banco.php';
    $pdo = Banco::conectar();
    $data = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="pt" >

  <head>
    <title>INFRA PREDIAL - UNINOVE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.2.0/metisMenu.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style2.css"> 
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
  </head>
  <body onload="pisca()">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <img src="img/uninove22.png" alt="uninove" height="50px">
      </div>
      <div class="text-right">
        <br><a href="http://localhost/help/form_help.php"> <button type="button" class="btn btn-dark"> <span class="glyphicon glyphicon-plus-sign"></span> adicionar</button></a>
        <button type="checkbox"class="btn btn-dark" onclick="myFunction()">Modo escuro</button>
		    <button class="btn btn-dark" href="http://powerbiti.uninove.br/relatorio/powerbi/Service%20Desk/Relat%C3%B3rio%20de%20OS "target="_blank">Relatório</button> 
		    <button type="button" class="btn btn-dark">Ocorrências do dia: <span class="badge badge-light"></span>  
            <?php 
              $count=$pdo->prepare("SELECT * FROM help_infra where abertura = '".$data."' "); 
              $count->execute();
              $variavel0=$count->rowCount();
              echo $variavel0;
            ?> 
        </button>
      </div>
    </nav>

    <div class="container-fluid"><br>

      <center> <h1 class="page-header">Dashboard - Infraestrutura predial</h1> </center>
      <h3>CHAMADOS EFETUADOS</h3>
      <table class="table table-striped table-hover">
        <thead class="table thead-dark">
          <tr>
            <th><center>ID</center></th>
            <th><center>Data</center></th>
  				  <th><center>Professor</center></th>
            <th><center>Matricula</center></th>
            <th><center>Unidade</center></th>
            <th><center>Prédio</center></th> 
            <th><center>Andar</center></th>                           
            <th><center>Sala</center></th>
            <th><center>Serviço</center></th>       
  				  <th><center>Status</center></th>
            <th><center>Solução</center></th>
  				  <th><center>Nota</center></th>
  				  <th><center>Ação</center></th>    
  			  </tr>
        </thead>
        <tbody >
        
          <?php
            $sql = 'SELECT * FROM help_infra ORDER BY id DESC';
            foreach($pdo->query($sql)as $row){
              
              echo '<tr>';
              echo '<td><center>'. $row['id'] . '</center></td>';
              echo '<td><center>'. $row['abertura'] . '</center></td>';
  				    echo '<td><center>'. $row['nome_professor'] . '</center></td>';
              echo '<td><center>'. $row['matricula'] . '</center></td>';
              echo '<td><center>'. $row['unidade'] . '</center></td>';
              echo '<td><center>'. $row['predio'] . '</center></td>';
              echo '<td><center>'. $row['andar'] . '</center></td>';
              echo '<td><center>'. $row['sala'] . '</center></td>';
              echo '<td><center>'. $row['problema'] . '</center></td>';      
  				    echo '<td><center>'. $row['status'] . '</center></td>';
  				    echo '<td><center>'. $row['solucao'] . '</center></td>';
  				    echo '<td><center>'. $row['avaliacao'] . '</center></td>';                 
  				    echo '<td width=70><center>';
              
              if($row['status'] == 'Concluida' OR $row['status'] == 'Concluido'){
                echo '<a class="btn btn-light" style="color:black;"> Finalizada</a>';
              }else{
                echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'&link=list_geral.php">&nbspAtualizar&nbsp   </a>';
              }echo ' ';
               echo '</td>';
            }
          ?>
        </tbody>                   
      </table>   
    </div>
  </body>
</html>

<?php
    Banco::desconectar();
?>  
<script>
  function pisca() {
    var f = document.getElementById('pisca1');
    var f2 = document.getElementById('pisca2');
    var f3 = document.getElementById('pisca3');
    var f4 = document.getElementById('pisca4');

    setInterval(function() {
        f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
     }, 500);
  
    setInterval(function() {
          f2.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500);
    
    setInterval(function() {
          f3.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500);
    
    setInterval(function() {
          f4.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500);  
  }
  
  function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
</script>
