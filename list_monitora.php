<?php
  include 'banco.php';
    $pdo = Banco::conectar();
    $data = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="pt" >

<head>
  <meta charset="UTF-8">

  <title>INFRA PREDIAL - UNINOVE</title>

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
        
        <div class="row" style="margin-left: 10%;">
          

      </div>

      
    </div>
    <div class="text-right">
    <br><a href="http://localhost/help/index.html"> <button type="button" class="btn btn-dark"> <span class="glyphicon glyphicon-plus-sign"></span> adicionar</button></a>
          <button type="checkbox"class="btn btn-dark" onclick="myFunction()">Modo escuro</button>
          <button class="btn btn-dark" href="http://powerbiti.uninove.br/relatorio/powerbi/Service%20Desk/Relat%C3%B3rio%20de%20OS " target="_blank">Relatório</button>
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
       
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-info class">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <?php
                    $count1=$pdo->prepare("SELECT * FROM help_infra WHERE status !='Concluido' AND problema = 'Wi-fi' AND abertura = '".$data."' "); 
                    $count1->execute();
                    $soma1=$count1->rowCount();

                    if($soma1 > 0){ 
                     
                      echo "<i class='fa fa-wifi fa-3x' id='pisca1'></i>";
                    }else{
                       echo "<i class='fa fa-wifi fa-3x' ></i>";
                   }
                  ?>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <?php 
                      echo $soma1;
                    ?>
                  </div>CONEXÃO WI-FI</div>
              </div>
            </div>
            <a href="list_externo.php">
              <div>
                <span class="pull-left"></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-info class">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <?php
                    $count2=$pdo->prepare("SELECT * FROM help_infra WHERE status !='Concluido' AND problema = 'Chromebook' AND abertura = '".$data."' "); 
                    $count2->execute();
                    $soma2=$count2->rowCount();

                    if($soma2 > 0){  
                      echo "<i class='fa fa-chrome fa-3x' id='pisca2'></i>";
                    }else
                    echo "<i class='fa fa-chrome fa-3x' ></i>";
                  
                  ?>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <?php 
                      
                      echo $soma2;
                    ?>
                  </div>
                  <div>CHROMEBOOK</div>
                </div>
              </div>
            </div>

            <a href="list_concluido.php">
              <div >
                <span class="pull-left"></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-md-6">
          <div class="panel panel-info class">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <!--IMAGEM -->
                  <?php

                    $count3=$pdo->prepare("SELECT * FROM help_infra WHERE 

                         status !='Concluido' AND problema = 'Projetor' AND abertura = '".$data."' "); 

                    $count3->execute();
                    $soma3=$count3->rowCount();

                    if($soma3 > 0){  
                      echo "<i class='fa fa-video-camera fa-3x' id='pisca3'></i>";
                    }else{
                    echo "<i class='fa fa-video-camera fa-3x'></i>";
                  }
                  ?>
                </div>


                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <!-- CONTAGEM -->
                    <?php
                      
                      echo $soma3;
                    ?>
                  </div>
                  <div>PROJETOR</div>
                </div>
              </div>
            </div>

            <a href="list_andamento.php">
              <div >
                <span class="pull-left"></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>  
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-info class">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <?php
                    $count4=$pdo->prepare("SELECT * FROM help_infra WHERE status !='Concluido' AND problema = 'Outros' AND abertura = '".$data."' OR status !='Concluido' AND problema = 'Abrir/Fechar porta' AND abertura = '".$data."'"); 
                    $count4->execute();
                    $soma4=$count4->rowCount();

                    if($soma4 > 0){  
                      echo "<i class='fa fa-exclamation-triangle fa-3x' id='pisca4'></i>";
                    }else{
                    echo "<i class='fa fa-exclamation-triangle fa-3x' ></i>";
                  }
                  ?>                  

                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                     <?php
                      
                      echo $soma4;
                      ?>
                  </div>
                  <div>APOIO</div>
                </div>
              </div>
            </div>


            <a href="list_naoiniciado.php">
              <div>
                <span class="pull-left"></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
      </div><br>
        <a href="pendencias.php" style="color: black; text-decoration: none; font-size: 18px">Chamados não atendidos nos dias anteriores a hoje: <?php 
            $count9=$pdo->prepare("SELECT * FROM help_infra WHERE status !='Concluida' AND abertura != '".$data."' "); 
            $count9->execute();
            $variavel9=$count9->rowCount();
            echo $variavel9;

          ?></a> 
        <h3>CHAMADOS ABERTOS HOJE: <?php echo $data;?></h3>

          <table class="table table-striped table-hover">
            <thead class="table thead-dark" >
              <tr>
                <th><center>ID</center></th>
                <th><center>Professor</center></th>
                <th><center>Matricula</center></th>
                <th><center>Unidade</center></th>
                <th><center>Prédio</center></th> 
                <th><center>Andar</center></th>                           
                <th><center>Sala</center></th>
                <th><center>Serviço</center></th>
                <th><center>Status</center></th>
                <th><center>Ação</center></th>
              </tr>
            </thead>
            
            <tbody >
              <?php
                $sql = 'SELECT * FROM help_infra where abertura = "'.$data.'" ORDER BY id DESC';
                foreach($pdo->query($sql)as $row){

                  echo '<tr>';
                  echo '<td><center>'. $row['id'] . '</center></td>';
                  echo '<td><center>'. $row['nome_professor'] . '</center></td>';
                  echo '<td><center>'. $row['matricula'] . '</center></td>';
                  echo '<td><center>'. $row['unidade'] . '</center></td>';
                  echo '<td><center>'. $row['predio'] . '</center></td>';
                  echo '<td><center>'. $row['andar'] . '</center></td>';
                  echo '<td><center>'. $row['sala'] . '</center></td>';
                  echo '<td><center>'. $row['problema'] . '</center></td>';
                  echo '<td><center>'. $row['status'] . '</center></td>';
                  echo '<td width=70><center>';

                    if($row['status'] == 'Concluida' OR $row['status'] == 'Concluido'){

                      echo '<a class="btn btn-light" style="color:black;"> Finalizada</a>';

                    }else{

                      echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'">&nbspAtualizar&nbsp   </a>';

                    }
                    echo ' ';
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
    var f5 = document.getElementById('pisca5');

    setInterval(function() {
        f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
     }, 500);
  
    setInterval(function() {
        f2.style.visibility = (f2.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500);
    
    setInterval(function() {
        f3.style.visibility = (f3.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500);
    
    setInterval(function() {
        f4.style.visibility = (f4.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500); 

    setInterval(function() {
        f5.style.visibility = (f5.style.visibility == 'hidden' ? '' : 'hidden');
       }, 500); 
  }


  function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
</script>
