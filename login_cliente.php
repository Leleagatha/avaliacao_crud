<?php 
include_once('partials/header.php');
?>
<form class="container">
<h1>Faça o seu Login.</h1>
</div>
<div class='mb-3'>
<label for="exampleInputEmail1" class="form-label">CPF</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Forma Pagamento</label>
<input type="text" class="form-control" id="forma_pagamento">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Email</label>
<input type="text" class="form-control" id="email">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Nome</label>
<input type="text" class="form-control" id="nome">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Senha</label>
<input type="password" class="form-control" id="senha">
</div>
<button type="submit" class="btn btn-primary"><a class="btn" href="cadastra_cliente.php">Logar</a></button>
</form>

<?php 
include_once('partials/footer.php');
?>