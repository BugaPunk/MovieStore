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
				<div class="container px-5 py-8 mx-auto">
					<div class="-my-8 divide-y-2 divide-gray-100">
						<div class="py-8 flex flex-wrap md:flex-nowrap">
							<article class="flex bg-white transition hover:shadow-xl">
								<div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
									<time datetime="2022-10-10"
										class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
										<span>2022</span>
										<span class="w-px flex-1 bg-gray-900/10"></span>
										<span>Oct 10</span>
									</time>
								</div>

								<div class="hidden sm:block sm:basis-56">
									<?php foreach ($movies as $movie): ?>
										<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>">
											<img alt="Imagen de la pelicula"
												src="../movie_image/<?php echo $movie['ID']; ?>.jpg"
												class="aspect-square h-full w-full object-cover" />
										</a>
									<?php endforeach; ?>
								</div>

								<div class="flex flex-1 flex-col justify-between">
									<?php foreach ($movies as $movie): ?>
										<div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
											<a href="#">
												<h3 class="font-bold uppercase text-gray-900">
													<?php echo $movie['name']; ?>
												</h3>
											</a>

											<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-medium">
												<?php echo $movie['director']; ?>
											</p>
											<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-medium">
												<?php echo $movie['description']; ?>
											</p>
											<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-normal">
												<?php echo $movie['price']; ?>$
											</p>
										</div>
									<?php endforeach; ?>

									<div class="sm:flex sm:items-end sm:justify-end">
										<?php foreach ($movies as $movie): ?>
											<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>"
												class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
												Más Detalles
											</a>
										<?php endforeach; ?>
									</div>
								</div>
							</article>

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