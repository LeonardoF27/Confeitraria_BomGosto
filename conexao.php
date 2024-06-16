<?php
define("USER", "root");
define("PASS", "");
define("DBNAME", "pedido");

try {
    $pdo = new PDO('mysql:host=localhost;dbname=' . DBNAME, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Se chegarmos até aqui, a conexão foi bem sucedida
    // echo "Conectado ao banco de dados!";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
