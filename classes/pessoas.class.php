<?php

class Pessoas {

    public function addPessoa($nome, $email, $tel, $data, $sexo) {
        global $pdo;
        try {
            $sql = $pdo->prepare("INSERT INTO Pessoas VALUES (default, ?, ?, ?, ?, ?)");
            $sql->bindValue(1, $nome);
            $sql->bindValue(2, $tel);
            $sql->bindValue(3, $email);
            $sql->bindValue(4, $data);
            $sql->bindValue(5, $sexo);
            $sql->execute();
        } catch (PDOException $e) {
            echo "erro" . $e;
        }
    }

    public function atualizaPessoa($id, $nome, $telefone, $email){
      global $pdo;
      try {
          $sql = $pdo->prepare("UPDATE Pessoas SET  nome = ?, telefone = ?, email = ? WHERE id_pessoa = ?");
          $sql->bindValue(1, $nome);
          $sql->bindValue(2, $telefone);
          $sql->bindValue(3, $email);
          $sql->bindValue(4, $id);
          $sql->execute();
        } catch (PDOException $e) {
            echo "erro" . $e;
        }
    }

    public function getPessoas() {
        global $pdo;
        try {
            $sql = $pdo->prepare("SELECT * FROM Pessoas ORDER BY id_pessoa");
            $sql->execute();
            $dados = $sql->fetchAll();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
        return $dados;
    }

    public function getIdade($data) {
        list($ano, $mes, $dia) = explode('-', $data);
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        return $idade;
    }

    public function getSexoString($sexo) {
        if ($sexo == '1') {
            return 'Masculino';
        } else {
            return 'Feminino';
        }
    }

    public function deletePessoa($id) {
        global $pdo;
        try {
            $sql = $pdo->prepare("DELETE FROM Pessoas WHERE id_pessoa = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
        } catch (PDOException $e) {
            echo 'erro' . $e->getMessage();
        }
    }

    public function getPessoa($id) {
        global $pdo;
        try {
            $sql = $pdo->prepare("SELECT * FROM Pessoas WHERE id_pessoa = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
            $dado = $sql->fetch();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
        return $dado;
    }

}
