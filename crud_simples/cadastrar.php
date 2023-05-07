<?php 
    include_once("templates/header.php");
    include_once("backend/processar_cadastro.php");
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
            <h1 class="mb-4">Cadastrar cliente</h1>
            <div class="row mb-3">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="formGroupExampleInput2" placeholder="Digite seu sobrenome">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                </div>
            </div>
        </form>



<?php 
    include_once("templates/footer.php")
?>