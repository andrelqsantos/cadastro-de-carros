<?php
    require '../../config.php';
    require '../../classes/pessoas.class.php';
    if (!empty($_POST['nome']) /*&& !empty($_POST['email']) && !empty($_POST['telefone']) &&
  !empty($_POST['data']) && !empty($_POST['sexo'])*/) {
                  $nome = addslashes($_POST['nome']);
                  $email = addslashes($_POST['email']);
                  $telefone = addslashes($_POST['telefone']);
                  $data = addslashes($_POST['data']);
                  $sexo = addslashes($_POST['sexo']);
                  $p = new Pessoas();
                  $p->addPessoa($nome, $email, $telefone, $data, $sexo);
                  echo "Sucesso";
    }else {
      echo "Erro";
      var_dump($_POST);
    }

 ?>
