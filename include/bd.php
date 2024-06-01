<?php
$dbHost = "LocalHost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "LavaRapido";

$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conn -> connect_errno){
        echo "ERRO AO CONECTAR";


    }
    else {
        echo "conexão efetuada com sucesso!";
    }
    
?>