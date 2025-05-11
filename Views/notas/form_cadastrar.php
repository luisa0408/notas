<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>


<h2 class="text-center">Cadastrar Notas</h2>


<form action="/notas/cadastrar" method="POST">
  <div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control" id="titulo">
  </div>
  <div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="descricao">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar Nota</button>
</form>








<?php require_once __DIR__ . "/../layouts/footer.php"; ?>