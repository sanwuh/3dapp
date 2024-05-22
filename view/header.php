<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D App</title>
    <link rel="stylesheet" href="https://www.x3dom.org/release/x3dom.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://www.x3dom.org/release/x3dom.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">My Coca Cola Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" onclick="changeModel('coke.x3d', 'Coca Cola', 'Refreshing Coke')">Coke</a>
                            <a class="dropdown-item" href="#" onclick="changeModel('fanta.x3d', 'Fanta', 'Fruity Fanta')">Fanta</a>
                            <a class="dropdown-item" href="#" onclick="changeModel('sprite.x3d', 'Sprite', 'Lemon-Lime Sprite')">Sprite</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view/about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
