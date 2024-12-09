<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/addMovie.css"-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body>
    <?php
    include 'Header.php';
    ?>

    <div class="addMovies">
        <form name="add_movie" action="AddMovie.php" method="post" id="add_movie_form" enctype="multipart/form-data">

            <div id="blankSpace"></div>

            <label>Category:</label>
            <select name="category_name">
                <option value="horror">Horror</option>
                <option value="action">Accion</option>
                <option value="comedy">Comedia</option>
                <option value="thriller">Thriller</option>
                <option value="romance">Romance</option>
                <option value="fantasy">Fantasia</option>
                <option value="sci-fi">Ficcion</option>
                <option value="animation">Animacion</option>
            </select><br><br>

            <label>Nombre:</label>
            <input type="text" name="name" required><br><br>

            <label>Precio:</label>
            <input type="text" name="price" required pattern="^[0-9]+\.[0-9]{2}"
                title="Price must be a decimal (ex: 10.00)">
            <span id="price"></span><br><br>

            <label>Director:</label>
            <input type="text" name="director" required><br><br>

            <label>Descripcion:</label>
            <textarea name="description" required></textarea><br><br>

            <label>Cargue la portada en formato JPG</label>
            <input type="file" name="uploadFile" accept="image/jpeg" required><br><br>

            <label>&nbsp;</label>
            <input type="submit" value="Agregar Pelicula"><br>
        </form>
    </div>
</body>