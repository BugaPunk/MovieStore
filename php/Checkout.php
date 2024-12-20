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
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="font-ubuntu-sans">
    <header class="text-gray-600 body-font bg-gray-100">
        <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <?php
                if (!isset($_SESSION['loggedIn'])) { ?>
                    <a href="SignUp.php" class="mr-5 hover:text-gray-900 inline-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#9ca3af">
                            <path
                                d="M719-392v-122H597v-106h122v-122h106v122h122v106H825v122H719ZM360-492q-76 0-129-53t-53-129q0-76 53-129t129-53q76 0 129 53t53 129q0 76-53 129t-129 53ZM10-99v-143q0-41 19.69-73.85Q49.38-348.71 82-366q66-34 135.91-51t142-17Q432-434 502-417t136 51q32.63 17.29 52.31 50.15Q710-283 710-242v143H10Z" />
                        </svg>
                        Registrarse
                    </a>
                <?php } ?>
                <?php
                if (isset($_SESSION['loggedIn'])) { ?>
                    <a href="Checkout.php" class="mr-5 hover:text-gray-900 inline-flex gap-2">
                        <svg class="w-5 h-5 mt-0.5" xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#9ca3af">
                            <path
                                d="M428.3-725.35h-70.67q-21.19 0-36.14-14.92t-14.95-36.06q0-21.15 14.95-36.17 14.95-15.02 36.14-15.02h70.67v-70.68q0-21.04 14.93-36.06 14.92-15.02 36.06-15.02t36.17 15.02q15.02 15.02 15.02 36.06v70.68h70.67q21.05 0 36.07 14.97t15.02 36.18q0 21.22-15.02 36.12-15.02 14.9-36.07 14.9h-70.67v70.68q0 21.18-14.97 36.13-14.97 14.95-36.19 14.95-21.21 0-36.11-14.95-14.91-14.95-14.91-36.13v-70.68ZM268.15-59.28q-38.21 0-65.15-26.91-26.93-26.9-26.93-65.06 0-38.16 26.9-65.07 26.9-26.9 65.06-26.9 38.17 0 65.07 26.87 26.9 26.87 26.9 64.98 0 38.21-26.87 65.15-26.87 26.94-64.98 26.94Zm418.77 0q-38.16 0-65.06-26.91-26.9-26.9-26.9-65.06 0-38.16 26.86-65.07 26.87-26.9 64.98-26.9 38.29 0 65.07 26.87 26.78 26.87 26.78 64.98 0 38.21-26.78 65.15-26.78 26.94-64.95 26.94ZM92.15-799.93h-31.8q-22.57 0-38.62-15.96-16.06-15.95-16.06-38.62 0-22.67 16.06-38.72 16.05-16.05 38.62-16.05h64.8q16.25 0 29.71 8.57 13.45 8.57 20.64 23.58l161.7 337.87h284.08l143.65-260.31q7.24-13.23 20.33-20.59 13.08-7.36 27.65-7.36 31.92 0 47.89 26.84 15.96 26.83.24 54.79L712.39-478.87q-12.48 23.24-34.7 36.98-22.23 13.74-48.73 13.74H323.02l-31.76 56h436.31q22.71 0 38.69 15.98 15.98 15.98 15.98 38.69 0 22.71-15.98 38.69-15.98 15.99-38.69 15.99H266.39q-54.19 0-80.91-45.96t-1-94.67L234.24-496 92.15-799.93Z" />
                        </svg>
                        Carrito
                    </a>
                <?php } ?>
                <?php
                if (isset($_SESSION['admin'])) { ?>
                    <a href="modifyMovies.php" class="mr-5 hover:text-gray-900 inline-flex gap-2">
                        <svg class="w-5 h-5 mt-0.5" xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#9ca3af">
                            <path
                                d="M157.83-237.83v-300.65 322.87-22.22Zm0 113.18q-46.93 0-80.06-32.89-33.12-32.88-33.12-79.57v-485.06q0-47.11 28.37-76.74 28.37-29.63 71.96-36.44l76.09 153.7q6.97 14 19.93 22t28.58 8q31.25 0 47.13-26.04 15.88-26.03 2.12-53.48l-52.09-104.18h81.52l76.09 153.7q6.98 14 19.95 22 12.97 8 28.59 8 31.26 0 47.24-26.05t1.98-53.47l-52.09-104.18h81.76l76.09 153.7q6.98 14 19.94 22t28.58 8q31.24 0 47.12-26.04 15.88-26.03 2.12-53.48l-52.09-104.18h128.63q46.93 0 80.06 33.12 33.12 33.13 33.12 80.06v127.1q0 23.68-16.46 40.14-16.46 16.45-40.5 16.45H157.83v300.65h269.19q23.68 0 40.13 16.63 16.46 16.62 16.46 39.96 0 23.67-16.46 40.13-16.45 16.46-40.13 16.46H157.83Zm405.78-16.59v-65.04q0-11.48 4.36-21.84t12.83-18.31l208.77-208q11.07-11.64 24.89-16.8 13.83-5.16 27.65-5.16 15.09 0 29.08 5.36 13.99 5.36 25.44 16.6l37 38q11.2 11.23 16.46 24.87 5.26 13.64 5.26 28.04 0 14.72-5.13 28.83-5.13 14.12-16.59 25.32l-208 208q-8.16 8.24-18.42 12.48-10.25 4.24-21.97 4.24H620.2q-23.34 0-39.97-16.46-16.62-16.46-16.62-40.13Zm315.87-222.28-37-37 37 37Zm-240 203h38l120.04-121.05-18-19-19-18-121.04 120.05v38Zm140.04-140.05-19-18 37 37-18-19Z" />
                        </svg>
                        Modificar Peliculas
                    </a>
                <?php } ?>
            </nav>
            <a href="Homepage.php"
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="../img/Blu-raymovies.png" alt="Logo" class="w-3/4 h-3/4 text-white">
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <?php
                if (!isset($_SESSION['loggedIn'])) { ?>
                    <a href="Login.php"
                        class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-teal-200 rounded text-base mt-4 md:mt-0">Iniciar
                        Sesion
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#9ca3af" class="w-5 h-5 ml-1">
                            <path
                                d="M480-492q-70 0-118-48t-48-118q0-70 48-118t118-48q70 0 118 48t48 118q0 70-48 118t-118 48ZM162-229v-29q0-30 14.5-55t40.5-41q59-35 126.5-53.5T480-426q69 0 136.5 18.5T743-354q26 15 40.5 40.5T798-258v29q0 42-28 70t-70 28H260q-42 0-70-28t-28-70Z" />
                        </svg>
                    </a>
                <?php } else { ?>
                    <a href="logout.php"
                        class="inline-flex items-center bg-red-100 border-0 py-1 px-3 focus:outline-none hover:bg-red-200 rounded text-base mt-4 md:mt-0">Cerrar
                        Sesion
                        <svg class="w-5 h-5 ml-1 focus:outline-none" xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="currentColor">
                            <path
                                d="M197.83-84.65q-47.21 0-80.19-32.99-32.99-32.98-32.99-80.19v-564.34q0-47.21 32.99-80.19 32.98-32.99 80.19-32.99h227.5q23.34 0 39.96 16.46t16.62 40.01q0 23.55-16.62 40.13-16.62 16.58-39.96 16.58h-227.5v564.34h227.5q23.34 0 39.96 16.63 16.62 16.62 16.62 39.96 0 23.67-16.62 40.13t-39.96 16.46h-227.5Zm458.84-339.52H409.63q-23.67 0-40.13-16.63-16.46-16.62-16.46-39.96 0-23.67 16.46-40.13t40.13-16.46h247.04l-66.97-66.98q-16.96-17.06-16.96-40.56 0-23.5 16.96-40.34 16.95-17.07 40.27-16.95 23.31.11 40.27 17.07l165.72 165.72q16.71 16.96 16.71 39.39t-16.71 39.39L671.24-275.65q-16.96 16.95-40.77 16.95-23.82 0-40.77-17.71-16.96-16.96-16.96-40.39 0-23.44 16.96-40.4l66.97-66.97Z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        </div>
    </header>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-2/3 mx-auto">
                <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
                    <?php
                    $subtotal = 0; // Inicializar subtotal
                    foreach ($cart as $cart_item):
                        $queryProduct = 'SELECT * FROM movies WHERE ID = :ID';
                        $statement = $db->prepare($queryProduct);
                        $statement->bindValue(':ID', $cart_item['ID']);
                        $statement->execute();
                        $movie = $statement->fetch();
                        $statement->closeCursor();
                        $subtotal += $movie['price']; // Calcular subtotal
                        ?>
                        <div class="flex items-start gap-x-4 mb-6 w-full">
                            <!-- Imagen de la película -->
                            <img src="../movie_image/<?php echo $cart_item['ID']; ?>.jpg" width="100" class="rounded-md"
                                alt="Imagen de <?php echo $movie['name']; ?>">

                            <!-- Detalles -->
                            <div class="flow-root w-full">
                                <dl class="divide-y divide-gray-200 text-sm">
                                    <!-- Título -->
                                    <div class="grid grid-cols-1 sm:grid-cols-3 py-2">
                                        <dt class="font-medium text-gray-900">Título:</dt>
                                        <dd class="text-gray-700 sm:col-span-2"><?php echo $movie['name']; ?></dd>
                                    </div>
                                    <!-- Precio -->
                                    <div class="grid grid-cols-1 sm:grid-cols-3 py-2">
                                        <dt class="font-medium text-gray-900">Precio:</dt>
                                        <dd class="text-gray-700 sm:col-span-2">$<?php echo $movie['price']; ?></dd>
                                    </div>
                                    <!-- Acción -->
                                    <div class="grid grid-cols-1 sm:grid-cols-3 py-2">
                                        <dt class="font-medium text-gray-900">Acción:</dt>
                                        <dd class="sm:col-span-2">
                                            <form action="deleteFromCart.php" method="post">
                                                <input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
                                                <button
                                                    class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"
                                                    type="submit">
                                                    <span
                                                        class="absolute inset-0 border border-red-600 group-active:border-red-500"></span>
                                                    <span
                                                        class="block border border-red-600 bg-red-600 px-5 py-2 transition-transform active:border-red-500 active:bg-red-500 group-hover:-translate-x-1 group-hover:-translate-y-1">
                                                        Quitar
                                                    </span>
                                                </button>
                                            </form>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex-wrap mt-8">
                    <p class="text-lg font-semibold text-gray-900">Sub-total:
                        $<?php echo number_format($subtotal, 2); ?>
                    </p>
                    <p class="text-lg font-semibold text-gray-900">Total (con impuestos):
                        $<?php echo number_format($subtotal * 1.09, 2); ?></p>
                    <a href="OrderConfirmation.php"
                        class="mt-4 inline-block bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-600">Confirmar
                        Pedido</a>
                </div>
            </div>
        </div>
    </section>
</body>