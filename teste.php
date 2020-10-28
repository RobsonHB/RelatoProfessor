<?php

    include 'banco.php';
    $pdo = Banco::conectar();

    $data = date('d-m-Y');

                    $count=$pdo->prepare("SELECT * FROM help_infra WHERE status !='Concluido' AND problema = 'Wi-fi' AND abertura = '".$data."' OR status !='Concluido' AND problema = 'Wifi' AND abertura = '".$data."' "); 
                    $count->execute();
                    $soma1=$count->rowCount();

                    if($soma1 > 0){  
                      echo "ok";
                    }else{
                       echo "Nao ok";
                   }
                  ?>