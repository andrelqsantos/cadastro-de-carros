<?php require 'pages/header.php';
      require 'classes/pessoas.class.php';
      require 'classes/carros.class.php';
      $id = addslashes($_GET['id']);
      $c = new Carros();
      $p = new Pessoas();
      $pessoa = $p->getPessoa($id);
      $dados = $c->getCarrosDePessoas($id);
       ?>


<div class="table-responsive jumbotron container-fluid">

   <div class="container-fluid">

     <h2>Carros de <?php echo $pessoa['nome']; ?></h2>

       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Marca</th>
                   <th>Modelo</th>
                   <th>Ações</th>
               </tr>
           </thead>
           <?php foreach ($dados as $dado): ?>

           <tbody>
               <?php echo "<td>".$dado['id_carro']."</td>"; ?>
               <?php echo "<td>".$dado['marca']."</td>"; ?>
               <?php echo "<td>".$dado['modelo']."</td>"; ?>
               <td>
                 <button type="button" class="btn btn-success" onclick="inserirRevisao('<?php echo $dado['id_carro'] ?>')">
                     <img src="assets/images/si-glyph-hammer-and-wrench.svg" style="width:25px;height:25px;"/>
                 </button>
                 <button type="button" class="btn btn-warning" onclick="editarCarro('<?php echo $dado['id_carro'] ?>')">
                     <img src="assets/images/si-glyph-zoom-in.svg" style="width:25px;height:25px;"/>
                 </button>
                 <button type="button" class="btn btn-danger">
                     <img src="assets/images/si-glyph-trash.svg" onclick="excluirCarro('<?php echo $dado['id_carro'] ?>')" style="width:25px;height:25px;"/>
                 </button>
               </td>
           </tbody>
         <?php endforeach; ?>
       </table>
       <button type="button" class="btn btn-success" name="button" onclick="inserirCarro('<?php echo $_GET['id']; ?>')">Novo</button>
       <div id="modal-carro" class="modal fade" role="dialog">
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
