<?php
require_once 'config.php';
require_once 'model/database.php';

// 此处只在第一次运行 在初始化完成后注释掉代码
/*
$db = new Database();
$db->createTable();
$db->insertData('Coca Cola', 'Refreshing Coke', 'coke.x3d');
$db->insertData('Fanta', 'Fruity Fanta', 'fanta.x3d');
$db->insertData('Sprite', 'Lemon-Lime Sprite', 'sprite.x3d');
*/

include 'view/content.php';
?>
