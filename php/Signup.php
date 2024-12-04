<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body>

    <div id="header">
        <a href="Homepage.php">
            <img src="../img/Blu-raymovies.png" height="70" id="storeName" />
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

    <div class="signup-form">
        <h2>Sign Up</h2>
        <script src="../js/SignUp.js"></script>
        <form name="registration" onsubmit="return validateForm()" action="register.php" method="post"
            id="registration">
            <div class="row">
                <div class="column">
                    <input type="text" name="fullname" placeholder="Nombre completo" required><br>
                    <input type="email" name="email" placeholder="Correo" required><br>
                    <input type="password" name="pwd" placeholder="Contraseña" required><br>
                </div>
                <div class="column">
                    <input type="text" name="phone" placeholder="Numero de Telefono" required pattern='^(\d{3}[- ]?){2}\d{4}$'
                        title='10 digits (ex: xxx xxx xxxx)'><br>
                    <input type="email" name="confemail" placeholder="Confirme correo" required><br>
                    <input type="password" name="confpwd" placeholder="Confirme Contraseña" required><br>
                </div>
            </div>

            <h2>Información de envío</h2>
            <div class="row">
                <div class="column">
                    <input type="text" name="address" placeholder="Direccion" required><br>
                    <input type="text" name="city" placeholder="Ciudad" required><br>
                </div>
                <div class="column">
                    <input type="text" name="state" placeholder="Pais" required><br>
                    <input type="text" name="zip" placeholder="Codigo postal" required pattern='^\d{5}([- ]?\d{4})?$'
                        title="El código postal debe ser xxxxx o xxxxx-xxxx">
                    <br>
                </div>
            </div>

            <h2>Información de pago</h2>
            <div class="row">
                <div class="column">
                    <input type="text" name="cardNum" placeholder="Numero de tarjeta" required
                        pattern='^(\d{4}[- ]?){3}\d{4}$' title="El número de tarjeta debe tener 16 dígitos"><br>
                    <input type="text" name="nameOnCard" placeholder="Nombre de tarjeta" required='^[\d]+'
                        title="El nombre no puede contener números"><br>
                </div>
                <div class="column">
                    <input type="text" name="expDate" placeholder="Fecha de Exp." required
                        pattern='^((0[1-9])|(10)|(11)|(12))[\/ \\]\d{2}$'
                        title="Date must be month and year. (ex: 12/20)"><br>
                    <input type="text" name="secCode" placeholder="Codigo de seguridad" required pattern='^\d{3,4}$'
                        title="El código de seguridad debe ser de 3 o 4 dígitos"><br>
                </div>
            </div>
            <p class="red"><?php if (!empty($signupErrorMsg))
                echo $signupErrorMsg; ?></p>
            <div class="row">
                <div class="column">
                    <button type="submit" name="submit" class="orderButton">Guardar</button>
                </div>
            </div>
        </form>
        <h4>¿Ya tienes una cuenta?</h4>
        <a href="Login.php">
            <button type="submit" name="submit" class="orderButton">Inicia sesión</button>
        </a>
    </div>

</body>