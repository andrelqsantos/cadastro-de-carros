<?php

class Relatorios {

    public function filtros($valor) {
        switch ($valor) {
            case '1':
                try {
                    global $pdo;
                    $sql = $pdo->prepare("SELECT * FROM Carros");
                    $sql->execute();
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }

                break;

            case '2':
                try {
                    global $pdo;
                    $sql = $pdo->prepare("SELECT * FROM Carros ORDER BY dono");
                    $sql->execute();
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break;

            case '3':
                try {
                    
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break

            case '4':
                try {
                    
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break;

            case '5':
                try {
                    
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break;

            case '6':
                try {
                    
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break;

            case '7':
                try {
                    
                } catch (PDOException $e) {
                    return "Erro" . $e->getMessage();
                }
                break;

            default:
                // code...
                break;
        }
    }

}
