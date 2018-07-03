<?php
    require '../../config.php';
    require '../../classes/carros.class.php';
    $id = addslashes($_POST['id']);
    $c = new Carros();
    $carro = $c->getCarro($id);
    if (!empty($carro)) {
      ?>

  <form method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
          <input class="form-control" readonly value="<?php echo $carro['id_carro'] ?>" name="id" required>
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="marca">Marca:</label>
      <div class="col-sm-6">

          <select class="form-control" name="marca" required>
            <option value="<?php echo $carro['marca']; ?>"><?php echo $carro['marca']; ?></option>
            <option value="chevrolet">chevrolet</option>
            <option value="citroen">citroen</option>
            <option value="fiat">fiat</option>
            <option value="ford">ford</option>
            <option value="honda">honda</option>
            <option value="hyundai">hyundai</option>
          </select>
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="modelo">Modelo:</label>
      <div class="col-sm-10">
          <input class="form-control" value="<?php echo $carro['modelo']; ?>" placeholder="Entre com o modelo" name="modelo" required>
      </div>
  </div>

  <div class="form-group">
      <input type="submit" class="btn btn-success" value="salvar">
  </div>

</form>
<?php
}
?>
