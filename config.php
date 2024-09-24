<?php 

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = 'Lailinha1@';
    $dbName = 'spotify';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        die("falha".$mysqli->error);
    }else{
        echo "Conecção efetuada com sucesso";
    }

?> 
