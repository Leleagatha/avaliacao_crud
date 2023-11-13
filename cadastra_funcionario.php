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
<th scope="col">funcao</th>
<th scope="col">nome</th>
<th scope="col">telefone</th>
<th scope="col">senha</th>
<th scope="col">fk_cliente_cpf</th>
</tr>
</div>
';
$select = $conexao->query('SELECT id,funcao,nome,telefone,senha,fk_cliente_cpf FROM funcionario WHERE id=$id');
while($linha = $select->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
    <td>{$linha['id']}</td>
        <td>{$linha['funcao']}</td>
            <td>{$linha['nome']} </td>
                <td>{$linha['telefone']} </td>
                    <td>{$linha['senha']} </tr>
                    <td>{$linha['fk_cliente_cpf']} </tr>";
}

?>
<?php
include_once ('partials/footer.php');
?>