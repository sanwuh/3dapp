<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cameraId = $_POST['cameraId'];

    $response = [
        'cameraId' => $cameraId
    ];

    echo json_encode($response);
}
?>
