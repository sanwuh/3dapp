<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $viewId = $_POST['viewId'];

    $response = [
        'viewId' => $viewId
    ];

    echo json_encode($response);
}
?>
