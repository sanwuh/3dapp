<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model = $_POST['model'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $response = [
        'model' => $model,
        'name' => $name,
        'description' => $description
    ];

    echo json_encode($response);
}
?>
