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
	<!--link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/signup.css"-->
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body>
	<?php
	include 'header.php';
	?>
	<section class="text-gray-600 body-font">
		<div class="container px-5 py-24 mx-auto">
			<div class="flex flex-wrap w-full mb-20">
				<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
					<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Resultados de la
						Busqueda🔎</h1>
					<div class="h-1 w-20 bg-blue-500 rounded"></div>
				</div>
				<div class="lg:w-1/2 w-full leading-relaxed text-gray-500">
					<?php
					include 'Search.php';
					?>
				</div>
			</div>
			<section class="text-gray-600 body-font overflow-hidden">
				<div class="container px-5 py-24 mx-auto">
					<div class="-my-8 divide-y-2 divide-gray-100">
						<div class="py-8 flex flex-wrap md:flex-nowrap">
							<div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
								<span class="font-semibold title-font text-gray-700">CATEGORY</span>
								<span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
							</div>
							<div class="md:flex-grow">
								<h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat
									fashion axe chia unicorn</h2>
								<p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel
									vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag
									selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland
									craft beer.</p>
								<a class="text-blue-500 inline-flex items-center mt-4">Learn More
									<svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
										fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path d="M5 12h14"></path>
										<path d="M12 5l7 7-7 7"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>

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