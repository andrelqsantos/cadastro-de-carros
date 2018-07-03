<?php require 'pages/header.php' ?>
<?php require 'classes/pessoas.class.php' ?>
<?php require 'classes/carros.class.php' ?>
<?php
    $p = new Pessoas();
    $dados = $p->getPessoas();
 ?>
<div class="table-responsive jumbotron container-fluid">

    <div class="container-fluid">



        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php foreach ($dados as $dado): ?>

            <tbody>
                <?php echo "<td>".$dado['id_pessoa']."</td>"; ?>
                <?php echo "<td>".$dado['nome']."</td>"; ?>
                <?php echo "<td>".$dado['telefone']."</td>"; ?>
                <?php echo "<td>".$dado['email']."</td>"; ?>
                <td>
                  <button type="button" class="btn btn-success" onclick="addCarros('<?php echo $dado['id_pessoa'] ?>')">
                      <img src="assets/images/si-glyph-car.svg" style="width:25px;height:25px;"/>
                  </button>
                  <button type="button" class="btn btn-warning" onclick="editarPessoa('<?php echo $dado['id_pessoa'] ?>')">
                      <img src="assets/images/si-glyph-zoom-in.svg" style="width:25px;height:25px;"/>
                  </button>
                  <button type="button" class="btn btn-danger">
                      <img src="assets/images/si-glyph-trash.svg" onclick="excluirPessoa('<?php echo $dado['id_pessoa'] ?>')" style="width:25px;height:25px;"/>
                  </button>
                </td>
            </tbody>
          <?php endforeach; ?>
        </table>
        <button type="button" class="btn btn-success" name="button" onclick="inserirPessoa()">Novo</button>
        <div id="modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php require 'pages/footer.php'; ?>
