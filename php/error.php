<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div id="header">
        <a href="Homepage.php">
            <img src="../img/Blu-raymovies.png" id="storeName" />
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

    <div class="banner">
        <img src="../img/banner.png" class="banner">
    </div>
    <h1>Error<h1>
            <p>¡Este correo electrónico ya existe! Por favor, utilice otro correo electrónico y regístrese <a href="Login.php">aqui</a>.</p>

</body>