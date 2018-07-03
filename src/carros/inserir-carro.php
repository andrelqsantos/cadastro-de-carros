
<form method="post">

    <div class="form-group">
        <label class="control-label col-sm-2" for="marca">Marca:</label>
        <div class="col-sm-6">

            <select class="form-control" name="marca" required>

              <option value="chevrolet">Chevrolet</option>
              <option value="citroen">Citroen</option>
              <option value="fiat">Fiat</option>
              <option value="ford">Ford</option>
              <option value="honda">Honda</option>
              <option value="hyundai">Hyundai</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="modelo">Modelo:</label>
        <div class="col-sm-10">
            <input class="form-control" placeholder="Entre com o modelo" name="modelo" required>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Cadastrar">
    </div>

</form>
