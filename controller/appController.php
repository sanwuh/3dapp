<?php
require_once dirname(__DIR__) . '/model/database.php';

class AppController {
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->db->createTable();
    }

    public function getProducts() {
        return $this->db->getData();
    }
}

$app = new AppController();
$products = $app->getProducts();
?>
