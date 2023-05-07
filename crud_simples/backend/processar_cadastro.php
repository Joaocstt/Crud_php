<?php 

    include_once("lib/connection.php");

    $erro = "";
    $success = "";
    if(isset($_POST['enviar'])) {
        $nome = htmlspecialchars($_POST['nome']); 
        $sobrenome = htmlspecialchars($_POST['sobrenome']); 

        $nome_filter = preg_replace("/[^A-Za-zÀ-ú\s]/", "", $nome);
        $sobrenome_filter = preg_replace("/[^A-Za-zÀ-ú\s]/", "", $sobrenome);
        


        if(empty($nome_filter) || strlen($nome_filter) < 3) {
            $erro = "Preencha o campo nome";
        }

        else if(empty($sobrenome_filter) || strlen($sobrenome_filter) < 4) {
            $erro = "Preencha o campo sobrenome";
        }

        else {
            $stmt = $conn->prepare("INSERT INTO pessoas (nome, sobrenome) VALUES (?,?)");
            $stmt->bindParam(1, $nome_filter);
            $stmt->bindParam(2, $sobrenome_filter);

            $stmt->execute();

            $success = "Dados enviados com sucesso!";
        }

    }

?>

