<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lightId = $_POST['lightId'];

    $response = [
        'lightId' => $lightId
    ];

    echo json_encode($response);
}
?>
