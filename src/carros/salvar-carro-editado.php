<?php
require '../../config.php';
require '../../classes/carros.class.php';
if(!empty($_POST['id_carro']) && !empty($_POST['marca'])
    && !empty($_POST['modelo'])) {
        $c= new Carros();
        $id = $_POST['id_carro'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $c->atualizarCarro($id, $marca, $modelo);
        echo "Sucesso";
      }else{
          echo "Erro";
        }
 ?>
