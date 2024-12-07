<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body>
    <section class="text-gray-400 body-font h-screen"
        style="background-image: url('../img/background_light.jpg'); background-size: cover; background-position: center;">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center h-full">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title-font font-medium text-3xl text-white">Bienvenido a 📽️</h1>
                <img src="../img/Blu-raymovies.png" alt="">
                <p class="leading-relaxed mt-8">Alquile peliculas sin problemas. Ingrese sus credenciales por favor, si
                    no tiene cuenta registrese.</p><br>

                <a class="rounded-md bg-teal-600 mt-8 px-5 py-2.5 text-sm font-medium text-white shadow dark:hover:bg-teal-500"
                    href="Signup.php">
                    Registrese
                </a>
            </div>
            <div
                class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <?php if (!empty($loginErrorMsg))
                    echo $loginErrorMsg; ?>
                <form action="check.php" method="post">
                    <h2 class="text-white text-lg font-medium title-font mb-5">Iniciar Sesion</h2>
                    <div class="relative mb-4">
                        <label for="full-name" class="leading-7 text-sm text-gray-400">Correo</label>
                        <input type="text" name="email"
                            class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-blue-900 rounded border border-gray-600 focus:border-blue-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-400">Contraseña</label>
                        <input type="password" name="pwd"
                            class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-blue-900 rounded border border-gray-600 focus:border-blue-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button type="submit" name="submit"
                        class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Iniciar</button>
                </form>
            </div>
        </div>
    </section>

</body>