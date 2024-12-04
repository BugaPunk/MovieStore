<?php
require_once('database.php');
session_start();
$email = $_SESSION['email'];

$queryCart = 'SELECT * FROM cart WHERE email = :email ORDER BY ID';
$statement = $db->prepare($queryCart);
$statement->bindValue(':email', $email);
$statement->execute();
$cart = $statement->fetchAll();
?>

<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/signup.css">
    <link rel="stylesheet" href="../CSS/checkout.css">
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

    <div id="confirmation">
        <div id="confirmationHeader">
            <h2>Thank you for your order!</h2>

            <div id="confirmationSummary">
                <h4>Order Summary:</h4><br>
                <div class="column">
                    <?php
                    $subtotal = 0;
                    foreach ($cart as $cart_item):
                        $queryProduct = 'SELECT * FROM movies WHERE ID = :ID';
                        $statement = $db->prepare($queryProduct);
                        $statement->bindValue(':ID', $cart_item['ID']);
                        $statement->execute();
                        $movie = $statement->fetch();
                        $statement->closeCursor();
                        ?>
                        <ul id="movieInfoCheckout">
                            <li>
                                <p><i>Title:</i> <?php echo $movie['name']; ?></p>
                            </li>
                            <li>
                                <p><i>Price:</i> $<?php echo $movie['price'];
                                $subtotal += $movie['price']; ?></p>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="totalAndConfirm">
                <p><b>Sub-total: <?php echo $subtotal; ?></b></p>
                <p><b>Total with Tax (9%):<b> <?php echo number_format($subtotal * 1.09, 2);
                include('clearCart.php'); ?>
                </p>
            </div>

        </div>

    </div>

</body>