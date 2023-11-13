<?php 
session_start();
include_once('conexao.php');
include_once('partials/header.php');
include_once('views/index.php');
$cpf=$_SESSION['cpf'];
echo'
<div class="container">
<h1>lista</h1>
<table class="table">
<tr>
<th scope="col">cpf</th>
<th scope="col">forma_pagamento</th>
<th scope="col">email</th>
<th scope="col">nome</th>
<th scope="col">senha</th>
</tr>
</div>
';
$select = $conexao->query('SELECT cpf,forma_pagamento,email,nome,senha FROM cliente WHERE cpf=$cpf');
while($linha = $select->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
    <td>{$linha['cpf']}</td>
        <td>{$linha['forma_pagamento']}</td>
            <td>{$linha['email']} </td>
                <td>{$linha['nome']} </td>
                    <td>{$linha['senha']} </tr>";
}

?>
<?php
include_once ('partials/footer.php');
?>