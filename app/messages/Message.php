<?php
declare(strict_types=1);

class Message
{
    private PDO $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/database.php';
        $pdo = new PDO(
            $config['dsn'],
            $config['user'],
            $config['pass'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );

        $this->pdo = $pdo;
    }
    public function all(): array
    {
        $stmt = $this->pdo->query("
            SELECT m.id, u.username, m.name, m.email, m.phone, m.message,
                   m.query_type, m.status, m.created_at
            FROM messages m
            JOIN users u ON m.user_id = u.id
            ORDER BY m.created_at DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
