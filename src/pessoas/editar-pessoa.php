<?php
    require '../../config.php';
    require '../../classes/pessoas.class.php';
    $id = addslashes($_POST['id']);
    $e = new Pessoas();
    $pessoa = $e->getPessoa($id);
    if (!empty($pessoa)) {
      ?>
<form method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">ID:</label>
        <div class="col-sm-10">
            <input class="form-control" readonly value="<?php echo $pessoa['id_pessoa'] ?>" name="id" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Nome:</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?php echo $pessoa['nome'] ?>" placeholder="Entre com o nome" name="nome" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" value="<?php echo $pessoa['email'] ?>" placeholder="Entre com email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="tel">Telefone:</label>
        <div class="col-sm-6">
            <input type="tel" class="form-control" value="<?php echo $pessoa['telefone'] ?>" placeholder="Entre com Telefone" name="telefone" required>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Salvar">
    </div>

</form>
<?php
}
?>
