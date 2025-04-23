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

		echo "<tr>";
		echo "<th scope='row'>" . $nota['id'] . "</th>";
		echo "<td>" . $nota['titulo'] . "</td>";
		echo "<td>" . $nota['descricao'] . "</td>";
		echo "</tr>";
	}
?>
  </tbody>
</table>







<?php require_once __DIR__ . "/../layouts/footer.php"; ?>