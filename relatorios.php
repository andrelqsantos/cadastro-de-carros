<?php require 'pages/header.php' ?>
<?php require 'classes/pessoas.class.php' ?>
<?php require 'classes/carros.class.php' ?>
<?php
    $p = new Pessoas();
    $dados = $p->getPessoas();
 ?>
<div class="table-responsive jumbotron container-fluid">

    <div class="container-fluid">


    </div>


    <?php require 'pages/footer.php'; ?>
