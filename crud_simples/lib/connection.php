<?php 
    $host = "localhost"; 
    $database = "testecrud"; 
    $user = "root";
    $pass = "root";

    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

        // Ativar modo de erros.. 

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Vão parar o software e mostrar o erro. 
        
    }
    catch (PDOException $e) {
        // Erro na conexão com o banco de dados 
        $error = $e->getMessage(); 

        echo "Houveu um erro ao se conectar com o banco de dados: $error";
    }


?>