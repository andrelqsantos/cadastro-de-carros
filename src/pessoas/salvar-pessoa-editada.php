<?php
require '../../config.php';
require '../../classes/pessoas.class.php';
if(!empty($_POST['id']) && !empty($_POST['nome'])
    && !empty($_POST['telefone']) &&
    !empty($_POST['email'])) {
        $p= new Pessoas();
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $p->atualizaPessoa($id, $nome, $telefone, $email);
        echo "Sucesso";
      }else{
          echo "Erro";
        }
 ?>
