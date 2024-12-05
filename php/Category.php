<?php
require_once('database.php');
if (!isset($movie_id)) {
	$movie_id = filter_input(INPUT_GET, 'ID', FILTER_VALIDATE_INT);
	if ($movie_id == NULL || $movie_id == FALSE) {
		$queryMovie = 'SELECT ID FROM movies LIMIT 1';
		$statement1 = $db->prepare($queryMovie);
		$statement1->execute();
		$movie = $statement1->fetch();
		$movie_id = $movie['ID'];
	}
}
$category_name = $_GET['category'];

$queryAllMovies = 'SELECT * FROM movies WHERE category_name = :category_name ORDER BY ID';
$statement2 = $db->prepare($queryAllMovies);
$statement2->bindValue(':category_name', $category_name);
$statement2->execute();
$movies = $statement2->fetchAll();
$statement2->closeCursor();
?>

<head>
	<title>Blu-ray Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/category.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
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

	<div id="blankSpace"></div>

	<?php foreach ($movies as $movie): ?>
		<div class="row">
			<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>">
				<div class="column1">
					<img src="../movie_image/<?php echo $movie['ID']; ?>.jpg" alt="<?php echo $movie['name']; ?>"
						width="200px" height="300px">
				</div>
				<div class="column2">
					<h2><?php echo $movie['name']; ?></h2>
					<p><?php echo $movie['description']; ?></p>
				</div>
			</a>
		</div>

		<div id="blankSpace"></div>

	<?php endforeach; ?>

	<div class="banner">
		<img src="../img/banner.png" class="banner">
	</div>

</body>