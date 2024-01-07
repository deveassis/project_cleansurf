<?php

$host = "127.0.0.1";
$dbname = "cleansurf";
$usuario = "root";
$senha = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// Adicione tratamento de exceção para capturar erros de conexão
try {
    $conexao = new PDO($dsn, $usuario, $senha);

    // Agora você pode usar a conexão $conexao para executar consultas, se necessário.
    
} catch (PDOException $e) {
    // Tratamento de erro em caso de falha na conexão
    echo "Erro na conexão: " . $e->getMessage();
}
?>
