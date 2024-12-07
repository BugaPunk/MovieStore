<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="font-ubuntu-sans">
    <?php
    session_start();
    include 'header.php';
    ?>
    
    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <section class="relative flex h-24 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt=""
                    src="https://images.unsplash.com/photo-1617195737496-bc30194e3a19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    class="absolute inset-0 h-full w-full object-cover opacity-80" />

                <div class="hidden lg:relative lg:block lg:p-5">
                    <a class="block text-white" href="#">
                        <span class="sr-only">Home</span>
                        <img src="../img/Blu-raymovies.png" alt="logo">
                    </a>
                </div>
            </section>

            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">
                    <div class="relative -mt-16 block lg:hidden">
                        <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20"
                            href="#">
                            <span class="sr-only">Home</span>
                            <svg class="h-8 sm:h-10" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                                    fill="currentColor" />
                            </svg>
                        </a>

                        <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            Bienvenido a 🦑
                        </h1>

                        <p class="mt-4 leading-relaxed text-gray-500">
                            Registrese aca, solo le tomara algunos minutos.
                        </p>
                    </div>

                    <div class="col-span-6">
                        <label class="flex gap-4">
                            <h2 class="text-xl text-gray-700 font-medium">
                                Información Personal
                            </h2>
                        </label>
                    </div>

                    <form method="POST" class="mt-5 grid grid-cols-6 gap-6" action="register.php" name="registration">
                        <div class="col-span-6 sm:col-span-3 mt-4">
                            <label for="FirstName" class="block text-sm text-gray-700">
                                Nombre Completo
                            </label>
                            <input type="text" name="fullname" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3 mt-4">
                            <label for="LastName" class="block text-sm text-gray-700">
                                Telefono/Celular
                            </label>
                            <input type="text" name="phone" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Email" class="block text-sm text-gray-700"> Correo </label>

                            <input type="email" name="email" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Email" class="block text-sm text-gray-700"> Confirme Correo </label>

                            <input type="email" name="confemail" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm text-gray-700"> Contraseña </label>

                            <input type="password" name="pwd" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation" class="block text-sm text-gray-700">
                                Confirme Contraseña
                            </label>

                            <input type="password" name="confpwd" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6">
                            <label class="flex gap-4">
                                <h2 class="text-xl text-gray-700 font-medium">
                                    Información de Envío
                                </h2>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm text-gray-700">Direccion</label>

                            <input type="text" name="address" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm text-gray-700">País</label>

                            <input type="text" name="state" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Ciudad" class="block text-sm text-gray-700">Ciudad</label>

                            <input type="text" name="city" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="CodigoPostal" class="block text-sm text-gray-700">
                                Código Postal
                            </label>

                            <input type="text" name="zip" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6">
                            <label class="flex gap-4">
                                <h2 class="text-xl text-gray-700 font-medium">
                                    Información de Pago
                                </h2>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <label for="NroCard" class="block text-sm text-gray-700"> Número de Tarjeta</label>

                            <input type="text" name="cardNum" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6">
                            <label for="cardName" class="block text-sm text-gray-700">Nombre de la Tarjeta</label>
                            <input type="text" name="nameOnCard" required='^[\d]+'
                                title="El nombre no puede contener números"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm text-gray-700">Fecha de Exp.</label>
                            <input type="text" name="expDate" required
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation" class="block text-sm  text-gray-700">
                                Codigo de Seguridad
                            </label>

                            <input type="password" name="secCode" required pattern='^\d{3,4}$'
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm px-3" />
                        </div>

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <p class="red">
                                <?php if (!empty($signupErrorMsg))
                                    echo $signupErrorMsg; ?>
                            </p>
                            <button
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                                type="submit" name="submit">
                                Crear Cuenta
                            </button>

                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                ¿Ya tiene una cuenta?
                                <a href="Login.php" class="text-gray-700 underline">Ingrese</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $("form[name='registration']").on("submit", function (e) {
                let isValid = true; // Para determinar si el formulario es válido

                // Validar que los campos no estén vacíos
                $(this).find("input[required]").each(function () {
                    if ($(this).val().trim() === "") {
                        alert(`El campo "${$(this).attr("name")}" es obligatorio.`);
                        isValid = false;
                        return false; // Detiene el bucle
                    }
                });

                if (!isValid) return false;

                // Validar que los correos coincidan
                const email = $("input[name='email']").val().trim();
                const confEmail = $("input[name='confemail']").val().trim();
                if (email !== confEmail) {
                    alert("Los correos electrónicos no coinciden.");
                    return false;
                }

                // Validar fortaleza de contraseña
                const password = $("input[name='pwd']").val();
                if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password)) {
                    alert("La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.");
                    return false;
                }

                // Validar que las contraseñas coincidan
                const confPwd = $("input[name='confpwd']").val();
                if (password !== confPwd) {
                    alert("Las contraseñas no coinciden.");
                    return false;
                }

                // Validar número de tarjeta (solo números, 16 dígitos)
                const cardNum = $("input[name='cardNum']").val();
                if (!/^\d{16}$/.test(cardNum)) {
                    alert("El número de tarjeta debe contener 16 dígitos.");
                    return false;
                }

                // Validar fecha de expiración (MM/AA)
                const expDate = $("input[name='expDate']").val();
                if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expDate)) {
                    alert("La fecha de expiración debe tener el formato MM/AA.");
                    return false;
                }

                // Validar código de seguridad (3-4 dígitos)
                const secCode = $("input[name='secCode']").val();
                if (!/^\d{3,4}$/.test(secCode)) {
                    alert("El código de seguridad debe contener 3 o 4 dígitos.");
                    return false;
                }

                return isValid; // Enviar formulario solo si todo está válido
            });
        });
    </script>
</body>