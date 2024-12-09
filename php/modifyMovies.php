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
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
					<button id="addMovieBtn"
						class="group flex items-center justify-between gap-4 rounded-lg border border-indigo-600 bg-indigo-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring">
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
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div id="addMovieModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
		<div class="bg-white p-8 rounded-lg shadow-lg w-1/2 h-3/4">
			<h2 class="text-2xl font-bold mb-4">Agregar Pelicula</h2>
			<form name="add_movie" action="AddMovie.php" method="post" id="add_movie_form"
				enctype="multipart/form-data">
				<div class="mb-4">
					<label for="category" class="block text-sm font-medium text-gray-700">Categoria</label>
					<select name="category_name" id="category"
						class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-3 px-4">
						<option value="horror"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Horror</option>
						<option value="action"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Accion</option>
						<option value="comedy"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Comedia</option>
						<option value="thriller"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Thriller</option>
						<option value="romance"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Romance</option>
						<option value="fantasy"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Fantasia</option>
						<option value="sci-fi"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Ficcion</option>
						<option value="animation"
							class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
							Animacion</option>
					</select>
				</div>

				<div class="mb-4">
					<label for="name"
						class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
						<span class="text-xs font-medium text-gray-700"> Nombre </span>

						<input type="text" id="name" name="name" required
							class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
					</label>
				</div>

				<div class="mb-4">
					<label for="price"
						class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
						<span class="text-xs font-medium text-gray-700"> Precio </span>

						<input type="text" id="price" placeholder="Ej: 10.00" name="price" required
							pattern="^[0-9]+\.[0-9]{2}" title="El precio debe ser un decimal (ej: 10.00)"
							class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
					</label>
				</div>
				<div class="mb-4">
					<label for="director"
						class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
						<span class="text-xs font-medium text-gray-700"> Director </span>
						<input type="text" id="director" name="director" required
							class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
					</label>
				</div>
				<div class="mb-4">
					<label for="Descripcion"
						class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
						<span class="text-xs font-medium text-gray-700"> Descripcion </span>
						<textarea id="description" name="description" required
							class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"></textarea>
					</label>

				</div>
				<div class="mb-4"> <label for="uploadFile" class="block text-sm font-medium text-gray-700">Cargue la
						portada en formato JPG</label> <input type="file" id="uploadFile" name="uploadFile"
						accept="image/jpeg" required
						class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
				</div>
				<div class="flex justify-end">
					<button type="button" id="closeModalBtn"
						class="mr-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
						Cancelar
					</button>
					<button type="submit"
						class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
						Guardar
					</button>
				</div>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('#addMovieBtn').click(function () {
				$('#addMovieModal').removeClass('hidden');
			});

			$('#closeModalBtn').click(function () {
				$('#addMovieModal').addClass('hidden');
			});
		});
	</script>
</body>