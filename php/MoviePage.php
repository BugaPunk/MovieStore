<?php
require_once('database.php');
$movie_id = $_GET['id'];

$queryMovies = 'SELECT * FROM movies WHERE id = :movie_id';
$statement2 = $db->prepare($queryMovies);
$statement2->bindValue(':movie_id', $movie_id);
$statement2->execute();
$movie = $statement2->fetch();
$statement2->closeCursor();
?>

<head>
    <title>Movie Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-ubuntu-sans">
    <?php include 'Header.php'; ?>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="<?php echo htmlspecialchars($movie['name']); ?>"
                    class="lg:w-1/4 w-1/4 lg:h-1/4 h-1/4 object-cover object-center rounded"
                    src="../movie_image/<?php echo $movie['ID']; ?>.jpg">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase my-4">
                        <?php echo htmlspecialchars($movie['director']); ?>
                    </h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 my-10">
                        <?php echo htmlspecialchars($movie['name']); ?>
                    </h1>
                    <p class="leading-relaxed font-light my-12">
                        <?php echo htmlspecialchars($movie['description']); ?>
                    </p>
                    <div class="flex">
                        <span
                            class="title-font font-medium text-2xl text-gray-900">$<?php echo number_format($movie['price'], 2); ?></span>
                        <form action="addToCart.php" method="post" class="pl-36">
                            <input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
                            <?php if (isset($_SESSION['loggedIn'])) { ?>
                                <button type="submit"
                                    class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">
                                    Añadir al Carrito
                                </button>
                            <?php } else { ?>
                                <a href="Login.php"
                                    class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="currentColor">
                                        <path
                                            d="M475-99v-91h295v-580H475v-92h295q37.59 0 64.79 27.21Q862-807.59 862-770v580q0 37.18-27.21 64.09Q807.59-99 770-99H475Zm-74-175-65-63 97-97H99v-91h332l-97-97 65-64 206 207-204 205Z" />
                                    </svg>
                                </a>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>