<?php 
include_once('partials/header.php');
?>
<form class="container">
<h1>Faça o seu Login.</h1>
</div>
<div class='mb-3'>
<label for="exampleInputEmail1" class="form-label">id</label>
<input type="email" class="form-control" id="id" aria-describedby="emailHelp">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Funcao</label>
<input type="text" class="form-control" id="funcao">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">nome</label>
<input type="text" class="form-control" id="nome">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">telefone</label>
<input type="text" class="form-control" id="telefone">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Senha</label>
<input type="password" class="form-control" id="senha">
</div>
<button type="submit" class="btn btn-primary"><a class="btn" href="cadastra_funcionario.php">Logar</a></button>
</form>

<?php 
include_once('partials/footer.php');
?>