<?php 
session_start();
include_once('conexao.php');
include_once('partials/header.php');
include_once('views/index.php');
$id=$_SESSION['id'];
echo'
<div class="container">
<h1>lista</h1>
<table class="table">
<tr>
<th scope="col">id</th>
<th scope="col">endereco</th>
<th scope="col">telefone</th>
<th scope="col">nome</th>
<th scope="col">fk_estoque_id</th>
</tr>
</div>
';
$select = $conexao->query('SELECT id,endereco,telefone,nome,fk_estoque_id FROM fornecedor WHERE id=$id');
while($linha = $select->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
    <td>{$linha['id']}</td>
        <td>{$linha['endereco']}</td>
            <td>{$linha['telefone']} </td>
                <td>{$linha['nome']} </td>
                    <td>{$linha['fk_estoque_id']} </tr>";
}

?>
<?php
include_once ('partials/footer.php');
?>