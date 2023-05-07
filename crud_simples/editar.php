<?php 
    include_once("templates/header.php");
    include_once("backend/editar_pessoa.php");  

    if(!isset($_GET['id'])){
        header("Location: index.php");
    }

?>


        <?php 
            if(!empty($erro)): 
        ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro ?>
        </div>
        <?php endif; ?>
        <?php 
            if(!empty($success)):
        ?>

        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
   
        <?php endif; ?>
        <form method="POST">
            <h1 class="mb-4">Editar cliente</h1>
            <div class="row mb-3">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?php if(!empty($cliente['nome'])) echo $cliente['nome'] ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome"  placeholder="Digite seu sobrenome" value="<?php if(!empty($cliente['sobrenome'])) echo $cliente['sobrenome'] ?>">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                </div>
            </div>
        </form>



<?php 
    include_once("templates/footer.php")
?>