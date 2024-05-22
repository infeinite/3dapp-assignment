<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coca Cola Brand 3D App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x3dom/1.7.2/x3dom.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x3dom/1.7.2/x3dom.css">
</head>
<body>
    <header>
        <h1>My Coca Cola Brand</h1>
        <p>Refreshing the world, one sip at a time</p>
    </header>
    <nav>
        <button onclick="loadModel('coke')">Coke</button>
        <button onclick="loadModel('fanta')">Fanta</button>
        <button onclick="loadModel('sprite')">Sprite</button>
    </nav>
    <main>
        <div class="x3d-container">
            <x3d>
                <scene>
                    <inline nameSpaceName="model" mapDEFToID="true"></inline>
                </scene>
            </x3d>
        </div>
        <div id="description"></div>
    </main>
    <footer>
        <p>&copy; 2022 My Coca Cola Brand</p>
        <p><a href="https://github.com/your-repo-link">GitHub Repository</a></p>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>
