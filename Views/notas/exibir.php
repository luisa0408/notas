<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<div class="container">
    <?php 
    foreach ($notas as $nota){
        // pr($nota);  
        echo $nota['id'];
        echo '<br>';
        echo $nota['titulo'];
        echo '<br>';
        echo $nota['descricao'];
    }  
    ?>
</div>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>