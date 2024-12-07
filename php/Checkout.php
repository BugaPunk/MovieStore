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
    <?php
    include 'header.php';
    ?>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <!-- Encabezado -->
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Detalle de la Compra</h1>
                </div>
                <div class="lg:w-1/2 w-full leading-relaxed">
                    <?php
                    include 'Search.php';
                    ?>
                </div>
            </div>

            <!-- Detalles del carrito -->
            <div class="flex flex-wrap -m-4">
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

            <!-- Resumen del pedido -->
            <div class="mt-8">
                <p class="text-lg font-semibold text-gray-900">Sub-total: $<?php echo number_format($subtotal, 2); ?>
                </p>
                <p class="text-lg font-semibold text-gray-900">Total (con impuestos):
                    $<?php echo number_format($subtotal * 1.09, 2); ?></p>
                <a href="OrderConfirmation.php"
                    class="mt-4 inline-block bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-600">Confirmar
                    Pedido</a>
            </div>
        </div>
    </section>




    <div class="floatContain">

        <div id="orderSum">
            <h2>Lista de orden</h2>
            <div class="row">
                <div class="column">
                    <?php foreach ($cart as $cart_item): ?>
                        <div class="cartspace">
                            <ul id="cartList">
                                <li><img src="../movie_image/<?php echo $cart_item['ID']; ?>.jpg" width="80"></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="column">

                    <?php
                    $subtotal = 0;
                    foreach ($cart as $cart_item):
                        $queryProduct = 'SELECT * FROM movies WHERE ID = :ID';
                        $statement = $db->prepare($queryProduct);
                        $statement->bindValue(':ID', $cart_item['ID']);
                        $statement->execute();
                        $movie = $statement->fetch();
                        $statement->closeCursor();
                        ?>
                        <div class="cartspace">
                            <ul id="movieInfoCheckout">
                                <li>
                                    <p><i>Title:</i> <?php echo $movie['name']; ?></p>
                                </li>
                                <li>
                                    <p><i>Price:</i> $<?php echo $movie['price'];
                                    $subtotal += $movie['price']; ?></p>
                                </li>
                                <li>
                                    <form action="deleteFromCart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $movie['ID']; ?>">
                                        <input type="submit" value="Quitar">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div id="totalAndConfirm">
                <p><b>Sub-total: <?php echo $subtotal; ?></b></p>
                <p><b>Total:</b> <?php echo number_format($subtotal * 1.09, 2); ?></p>
                <a href="OrderConfirmation.php">
                    <button type="submit" name="submit" class="orderButton">Ordenar</button>
                </a>
            </div>
        </div>
    </div>
</body>