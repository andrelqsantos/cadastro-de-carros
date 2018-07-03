<?php
    require '../../config.php';
    require '../../classes/revisoes.class.php';
    if (!empty($_POST['id_carro']) /*&& !empty($_POST['email']) && !empty($_POST['telefone']) &&
  !empty($_POST['data']) && !empty($_POST['sexo'])*/) {
                  $data = addslashes($_POST['data']);
                  $id = addslashes($_POST['id_carro']);
                  $p = new Revisoes();
                  $p->addRevisao($id, $data);
                  echo "Sucesso";
    }else {
      echo "Erro";
    }

 ?>
