<?php 

    include_once("lib/connection.php");

    $stmt = $conn->prepare("SELECT * FROM pessoas");

    $stmt->execute();

    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>