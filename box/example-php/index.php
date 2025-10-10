<?php
// box/example-php/pgtest.php
$dsn = "pgsql:host=pgsql;port=5432;dbname=postgres";
$user = $_ENV['POSTGRES_USER']   ?? 'spicy';
$pass = $_ENV['POSTGRES_PASSWORD'] ?? 'devbox';

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "✅ Postgres conectado: " . $pdo->query('SELECT version()')->fetchColumn();
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
