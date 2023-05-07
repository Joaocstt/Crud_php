<?php 

    include_once("../lib/connection.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("DELETE FROM pessoas WHERE id = ?");

        $stmt->bindParam(1, $id);

        $stmt->execute();

        header("Location: ../index.php");

        

    } else {
        echo "Id não existe";
    }
    

?>