<?php
require '../../config.php';
require '../../classes/pessoas.class.php';
if(!empty($_POST['id'])){
    $p= new Pessoas();
    $id = $_POST['id'];
    $p->deletePessoa($id);
    echo $id;
}else {
echo $_POST['id'];
}
 ?>
