<?php
require_once('database.php');
$movie_title = filter_input(INPUT_POST, 'search');

$queryMovies = 'SELECT * FROM movies WHERE name LIKE \'%' . $movie_title . '%\'';
$statement = $db->prepare($queryMovies);
$statement->execute();
$movies = $statement->fetchAll();
$statement->closeCursor();
?>

<head>
	<title>Blu-ray Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/signup.css">
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

	<div class="floatContain">
		<div id="cart">
			<div class="row">

				<div class="column">
					<?php foreach ($movies as $movie): ?>
						<div class="cartItem">
							<ul id="cartList">
								<li><a href="MoviePage.php?id=<?php echo $movie['ID']; ?>"><img
											src="../movie_image/<?php echo $movie['ID']; ?>.jpg" height="180"
											width="120"></a></li>
							</ul>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="column">
					<?php foreach ($movies as $movie): ?>
						<div class="cartItem">
							<ul id="movieInfoSearch">
								<li>
									<p><i>Titulo:</i> <?php echo $movie['name']; ?></p>
								</li>
								<li>
									<p><i>Director:</i> <?php echo $movie['director']; ?></p>
								</li>
								<li>
									<p><i>Precio:</i> <?php echo $movie['price']; ?></p>
								</li>
							</ul>
						</div>
					<?php endforeach; ?>
				</div>

			</div>

		</div>

	</div>

</body>