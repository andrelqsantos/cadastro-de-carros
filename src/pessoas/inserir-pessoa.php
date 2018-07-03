
<form method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Nome:</label>
        <div class="col-sm-10">
            <input class="form-control" placeholder="Entre com o nome" name="nome" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" placeholder="Entre com email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="tel">Telefone:</label>
        <div class="col-sm-6">
            <input type="tel" class="form-control"  placeholder="Entre com Telefone" name="telefone" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="date">Data de nascimento:</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="data" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="sex">Sexo:</label>
        <div class="col-sm-6">

            <select class="form-control" name="sexo" required>

                <option value="1">Masculino</option>
                <option value="0">Feminino</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Cadastrar">
    </div>

</form>
