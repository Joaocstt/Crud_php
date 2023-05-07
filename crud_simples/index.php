<?php 
    include_once("templates/header.php");
    include_once("backend/processar_pessoa.php");
    include_once("backend/editar_pessoa.php");
?>
<style>
    #flex {
        display: flex;
        gap: 20px;
    }
</style>

<main class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php if(empty($clientes)): ?>
                <td colspan="4">Não há clientes!</td>
        <?php else: ?>
        <?php foreach($clientes as $cliente): ?>

            <tr>
                <th scope="row"><?= $cliente['id']?></th>
                <td><?= $cliente['nome']?></td>
                <td><?= $cliente['sobrenome']?></td>
         
            <td>
                <div id="flex">
                <a href="editar.php?id=<?= $cliente['id']?>">Editar</a>
                    <a href="./backend/deletar_pessoa.php?id=<?= $cliente['id']?>" onclick="return excluir()">Excluir</a>
                </div>
            </td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table> 

    <script>
    function excluir() {
         let con = confirm("Deseja excluir?")
         if(con) {
            alert("Usuário excluído com sucesso")
         }
         else {
            return false;
         }
    }
</script>
</main>



<?php 
    include_once("templates/footer.php")
?>