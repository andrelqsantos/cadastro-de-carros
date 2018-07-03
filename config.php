<?php

global $pdo;
try {
    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=db_cadcarros;user=postgres;password=admin");
} catch (PDOException $e) {
    echo "FALHOU: " . $e->getMessage();
    exit;
}
