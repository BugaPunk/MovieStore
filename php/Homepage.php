<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="m-auto p-auto">
    <div id="header">
        <a href="Homepage.php">
            <img src="../img/Blu-raymovies.png" id="storeName" />
        </a>
        <div class="search-container">
            <form action="SearchResults.php" method="post">
                <input id="search" type="text" placeholder="Busca Un titulo" name="search">
                <button type="submit">Busca<i class="fa fa-search"></i></button>
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

    <h2 class="homeheader">Categorias</h2>

    <div id="featuredCat">
        <div class="gallery">
            <a href="Category.php?category=horror">
                <img src="../category_image/horror.png" alt="Horror" width="600" height="400">
                <div class="desc">Horror</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=action">
                <img src="../category_image/action.png" alt="Action" width="600" height="400">
                <div class="desc">Accion</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=comedy">
                <img src="../category_image/comedy.png" alt="Comedy" width="600" height="400">
                <div class="desc">Comedia</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=thriller">
                <img src="../category_image/thriller.png" alt="Thriller" width="600" height="400">
                <div class="desc">Thriller</div>
            </a>
        </div>
    </div>

    <div id="featuredCat">
        <div class="gallery">
            <a href="Category.php?category=romance">
                <img src="../category_image/romance.png" alt="Romance" width="600" height="400">
                <div class="desc">Romance</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=fantasy">
                <img src="../category_image/fantasy.png" alt="Fantasy" width="600" height="400">
                <div class="desc">Fantasia</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=sci-fi">
                <img src="../category_image/sci-fi.png" alt="Sci-fi" width="600" height="400">
                <div class="desc">Ficcion</div>
            </a>
        </div>
        <div class="gallery">
            <a href="Category.php?category=animation">
                <img src="../category_image/animation.png" alt="Animation" width="600" height="400">
                <div class="desc">Animacion</div>
            </a>
        </div>
    </div>

    <div id="blankSpace"></div>

    <div class="banner">
        <img src="../img/banner.png" class="banner">
    </div>
</body>