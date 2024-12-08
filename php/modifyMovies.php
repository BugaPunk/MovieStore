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
	<!--link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/modify.css"-->
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="font-ubuntu-sans">
	<?php
	include 'Header.php';
	?>
	<section class="text-gray-600 body-font">
		<div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
			<div class="text-center lg:w-2/3 w-full">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
					Bienvenido Administrador
				</h1>
				<div class="my-24 leading-relaxed">

					<div class="overflow-x-auto">
						<table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
							<thead class="ltr:text-left rtl:text-right">
								<tr>
									<th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Categoria</th>
									<th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Titulo</th>
									<th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Accion</th>
								</tr>
							</thead>

							<tbody class="divide-y divide-gray-200">
								<?php foreach ($movies as $movie): ?>
									<tr class="odd:bg-gray-50">
										<td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
											<?php echo $movie['category_name']; ?>
										</td>
										<td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $movie['name']; ?>
										</td>
										<td class="whitespace-nowrap px-4 py-2 text-gray-700">
											<form action="DeleteMovie.php" method="post">
												<input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
												<div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1">
													<!--button
														class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative">
														<svg xmlns="http://www.w3.org/2000/svg" fill="none"
															viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
															class="size-4">
															<path stroke-linecap="round" stroke-linejoin="round"
																d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
														</svg>

														Edit
													</!--button>

													<button--
														class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative">
														<svg xmlns="http://www.w3.org/2000/svg" fill="none"
															viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
															class="size-4">
															<path stroke-linecap="round" stroke-linejoin="round"
																d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
															<path stroke-linecap="round" stroke-linejoin="round"
																d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
														</svg>

														View
													</button-->
													<button type="submit"
														class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-red-500 shadow-sm focus:relative">
														<svg xmlns="http://www.w3.org/2000/svg" fill="none"
															viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
															class="size-4">
															<path stroke-linecap="round" stroke-linejoin="round"
																d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
														</svg>

														Eliminar
													</button>
												</div>

											</form>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div>
					<a class="group flex items-center justify-between gap-4 rounded-lg border border-indigo-600 bg-indigo-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
						href="AddMovieForm.php">
						<span
							class="font-medium text-white transition-colors group-hover:text-indigo-600 group-active:text-indigo-500">
							Agregar Pelicula
						</span>

						<span
							class="shrink-0 rounded-full border border-current bg-white p-2 text-indigo-600 group-active:text-indigo-500">
							<svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
								viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<div class="hidden">
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
	</div>

</body>