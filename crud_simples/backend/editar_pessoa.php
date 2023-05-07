<?php 

    include_once("./lib/connection.php");
    $success = "";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM pessoas WHERE id = ?");

        $stmt->bindParam(1, $id);

        $stmt->execute();

        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        // Atualizar dados 

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

                $setstmt = $conn->prepare("UPDATE pessoas SET nome = ? , sobrenome = ? WHERE id = ? ");
        
                $setstmt->bindParam(1, $nome_filter);
                $setstmt->bindParam(2, $sobrenome_filter);
                $setstmt->bindParam(3, $id);
        
                $setstmt->execute();

                $success = "Usuário editado com sucesso";

        }
       
    }
}

 

?>