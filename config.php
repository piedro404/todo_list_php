<?php 

    $dbHostname = "localhost";
    $dbUsername = "root";
    $dbPassword = "pedroerosa";
    $dbDataBase = "todo_list";

    $conn = new mysqli($dbHostname,$dbUsername,$dbPassword,$dbDataBase);

    if($conn->connect_error){
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    else{
        echo "Funcionou";
    }

?>