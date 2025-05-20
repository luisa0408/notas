<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<h2 class="text-center">Listagem de Notas</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>
  <tbody>

  <?php
	foreach ($notas as $nota) { 
		echo "<tr>";?>
<td>
  <input type="checkbox" name="checkbox[]" value="<?= $nota['id'] ?>"> 
</td>

<?php
		echo "<th scope='row'>" . $nota['id'] . "</th>";
		echo "<td>" . $nota['titulo'] . "</td>";
		echo "<td>" . $nota['descricao'] . "</td>";
		echo "</tr>";
	}
?>
  </tbody>
</table>
<div class="text-center">
  <button type="submit" onclick="location.href='/notas/deletar';" class="btn btn-danger">Deletar</button>
  <button type="button" onclick="location.href='/notas/deletar';" class="btn btn-primary">Editar</button>
  <button type="button" onclick="location.href='form_cadastrar';" class="btn btn-primary">Cadastrar Nota</button>
</div>





<?php require_once __DIR__ . "/../layouts/footer.php"; ?>