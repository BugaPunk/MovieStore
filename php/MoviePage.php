<?php
require_once('database.php');
$movie_id = $_GET['id'];

$queryMovies = 'SELECT * FROM movies WHERE id = :movie_id';
$statement2 = $db->prepare($queryMovies);
$statement2->bindValue(':movie_id', $movie_id);
$statement2->execute();
$movie = $statement2->fetch();
$statement2->closeCursor();
?>

<head>
    <title>Movie Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/movieStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body>

    <div id="header">
        <a href="Homepage.php">
            <img src="../img/Blu-raymovies.png" height="70" id="storeName" />
        </a>
        <div class="search-container">
            <form action="SearchResults.php" method="post">
                <input id="search" type="text" placeholder="Busca por titulo" name="search">
                <button type="submit">Buscar<i class="fa fa-search"></i></button>
            </form>
        </div>

        <div id="navbar">
            <ul>
                <li>
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <a href="Homepage.php">Inicio</a>
                </li>
                <?php
                session_start();
                if (!isset($_SESSION['loggedIn'])) { ?>
                    <li><a href="Login.php">
                            <span class="material-symbols-outlined">
                                person
                            </span>Iniciar Sesion</a></li>
                <?php } else { ?>
                    <li><a href="Checkout.php">
                            <span class="material-symbols-outlined">
                                add_shopping_cart
                            </span>
                            Carrito</a></li>
                    <li><a href="logout.php">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            Cerrar</a></li>

                <?php }
                if (isset($_SESSION['admin'])) {
                    ?>
                    <li><a href="modifyMovies.php">
                            <span class="material-symbols-outlined">
                                movie_edit
                            </span>
                            Modificar Peliculas</a></li>
                <?php } ?>
            </ul>
        </div>

    </div>

    <div class="container">
        <img src="../movie_image/<?php echo $movie['ID']; ?>.jpg" class="image" alt="<?php echo $movie['name']; ?>"
            width="350" height="450">

        <div class="content">
            <h1 class="unbold"><?php echo $movie['name']; ?></h1>
            <form action="addToCart.php" method="post">
                <p>Por <?php echo $movie['director']; ?></p>
                <h1>$<?php echo $movie['price']; ?></h1>
                <input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
                <?php
                if (isset($_SESSION['loggedIn'])) { ?>
                    <button type="submit">Añadir al carrito</button>
                <?php } else { ?>
                    <p><a href="Login.php">Inicie Sesion</a> para comprar.</p>
                <?php } ?>

                <br><br>
                <p>
                    <?php echo $movie['description']; ?>
                </p>
        </div>

    </div>

</body>