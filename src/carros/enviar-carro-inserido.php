<?php
    require '../../config.php';
    require '../../classes/carros.class.php';
    if (!empty($_POST['id_pessoa']) /*&& !empty($_POST['email']) && !empty($_POST['telefone']) &&
  !empty($_POST['data']) && !empty($_POST['sexo'])*/) {
                  $dono = addslashes($_POST['id_pessoa']);
                  $marca = addslashes($_POST['marca']);
                  $modelo = addslashes($_POST['modelo']);
                  $c = new Carros();
                  $c->addCarro($marca, $modelo, $dono);
                  echo "Sucesso";
                  var_dump($_POST);
    }else {
      echo "Erro";
      var_dump($_POST);
    }

 ?>
