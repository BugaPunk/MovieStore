<?php
require_once('database.php');
$queryMovies = 'SELECT * FROM movies';
$statement = $db->prepare($queryMovies);
$statement->execute();
$movies = $statement->fetchAll();
$statement->closeCursor();
?>

<head>
	<title>Modify Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/modify.css">
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
		<h1 class="align">Bienvenido Admin</h1>
		<table class="items">
			<tr>
				<th>Categoria</th>
				<th>Titulo</th>
				<th></th>
			</tr>
			<?php foreach ($movies as $movie): ?>
				<tr>
					<td><?php echo $movie['category_name']; ?></td>
					<td><?php echo $movie['name']; ?></td>
					<td>
						<form action="DeleteMovie.php" method="post">
							<input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
							<input type="submit" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<a href="AddMovieForm.php">
		<button type="submit" name="submit" class="orderButton">Agregar peliculas</button>
	</a>
</body>