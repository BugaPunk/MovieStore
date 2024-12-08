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
	<!--link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/category.css"-->
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="font-ubuntu-sans">
	<?php
	include('Header.php');
	?>
	<section class="text-gray-600 body-font">
		<div class="container px-5 py-24 mx-auto">
			<div class="flex flex-wrap w-full mb-14">
				<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
					<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">CATEGORIAS📹</h1>
					<div class="h-1 w-20 bg-blue-500 rounded"></div>
				</div>
				<div class="lg:w-1/2 w-full leading-relaxed text-gray-500">
					<?php
					include 'Search.php';
					?>
				</div>
			</div>
			<section class="text-gray-600 body-font overflow-hidden">
				<div class="container px-5 py-6 mx-auto">
					<?php foreach ($movies as $movie): ?>
						<div class="my-6 divide-y-2 divide-gray-100">

							<div class="py-8 flex flex-wrap md:flex-nowrap">

								<article class="flex bg-gray-100/35 transition hover:shadow-xl">
									<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>"></a>
									<div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
										<time datetime="2022-10-10"
											class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
											<span>2022</span>
											<span class="w-px flex-1 bg-gray-900/10"></span>
											<span>Oct 10</span>
										</time>
									</div>

									<div class="hidden sm:block sm:basis-56">
										<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>">
											<img alt="Imagen de la pelicula"
												src="../movie_image/<?php echo $movie['ID']; ?>.jpg"
												class="aspect-square h-full w-full object-cover" />
										</a>
									</div>

									<div class="flex flex-1 flex-col justify-between">
										<div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
											<a href="#">
												<h3 class="font-bold uppercase text-gray-900">
													<?php echo $movie['name']; ?>
												</h3>
											</a>

											<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-medium">
												<?php echo $movie['director']; ?>
											</p>
											<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 font-light">
												<?php echo $movie['description']; ?>
											</p>
										</div>

										<div class="sm:flex sm:items-end sm:justify-end">
											<a href="MoviePage.php?id=<?php echo $movie['ID']; ?>"
												class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
												Más Detalles
											</a>
										</div>
									</div>

								</article>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
		</div>
	</section>
	<?php
	include('Footer.php');
	?>

</body>