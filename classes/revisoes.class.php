<?php

class Revisoes {

    public function addRevisao($id_carro, $data) {
        global $pdo;
        try {
            $sql = $pdo->prepare("INSERT INTO Revisao Values(default, ?, ?)");
            $sql->bindValue(1, $id_carro);
            $sql->bindValue(2, $data);
            $sql->execute();
        } catch (PDOException $e) {
            echo "erro" . $e;
        }
    }

    public function getRevisoes() {
        global $pdo;

        try {
            $sql = $pdo->prepare("SELECT * FROM Revisao");
            $sql->execute();
            $dados = $sql->fetchAll();
            var_dump($dados);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
        return $dados;

        }

}

?>
