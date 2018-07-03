<?php
require '../../config.php';
require '../../classes/carros.class.php';
if(!empty($_POST['id'])){
    $c= new Carros();
    $id = $_POST['id'];
    $c->deleteCarro($id);
    echo $id;
}else {
echo "erro";
}
 ?>
