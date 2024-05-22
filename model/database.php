<?php
require_once dirname(__DIR__) . '/config.php';

class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = getDBConnection();
    }

    public function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS products (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    description TEXT,
                    model TEXT
                )";
        $this->pdo->exec($sql);
    }

    public function insertData($name, $description, $model) {
        $sql = "INSERT INTO products (name, description, model) VALUES (:name, :description, :model)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':name' => $name, ':description' => $description, ':model' => $model]);
    }

    public function getData() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
