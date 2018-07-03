<?php

class Carros {

    public function addCarro($marca, $modelo, $dono) {
        global $pdo;
        try {
            $sql = $pdo->prepare("INSERT INTO Carros VALUES (default, ?, ?, ?)");
            $sql->bindValue(1, $marca);
            $sql->bindValue(2, $modelo);
            $sql->bindValue(3, $dono);
            $sql->execute();
        } catch (PDOException $e) {
            echo "erro" . $e;
        }
    }

    public function deleteCarro($id) {
        global $pdo;
        try {
            $sql = $pdo->prepare("DELETE FROM Carros WHERE id_carro = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
        } catch (PDOException $e) {
            echo 'erro' . $e->getMessage();
        }
    }

    public function atualizarCarro($id, $marca, $modelo){
      global $pdo;
      try {
          $sql = $pdo->prepare("UPDATE Carros SET  marca = ?, modelo = ? WHERE id_carro = ?");
          $sql->bindValue(1, $marca);
          $sql->bindValue(2, $modelo);
          $sql->bindValue(3, $id);
          $sql->execute();
        } catch (PDOException $e) {
            echo "erro" . $e;
        }
    }

    public function getCarrosDePessoas($dono) {
        global $pdo;
        try {
            $sql = $pdo->prepare("SELECT * FROM Carros WHERE id_pessoa = ? ORDER BY id_carro");
            $sql->bindValue(1, $dono);
            $sql->execute();
            $dados = $sql->fetchAll();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
        return $dados;
    }

    public function getCarro($carro) {
        global $pdo;
        try {
            $sql = $pdo->prepare("SELECT * FROM Carros WHERE id_carro = ?");
            $sql->bindValue(1, $carro);
            $sql->execute();
            $dados = $sql->fetch();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
        return $dados;
    }

}
