<head>
    <title>Blu-ray Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>

<body class="m-auto p-auto">
    <?php
    session_start();
    include 'header.php';
    ?>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Categorias📹</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon
                    brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard
                    of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap -m-4 mb-2">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=horror" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg class="size-10 sm:size-12" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#4b5563">
                                    <path
                                        d="M223.89-64.13v-175.72q-36.04-17.48-65.42-45.83-29.38-28.36-50.5-64.72t-32.48-79.48Q64.13-473 64.13-519.94q0-166.26 116.51-271.09 116.5-104.84 299.59-104.84 183.08 0 299.36 104.84Q895.87-686.2 895.87-519.94q0 46.94-11.36 90.06-11.36 43.12-32.48 79.48-21.12 36.36-50.5 64.72-29.38 28.35-65.42 46.22v175.33H223.89ZM337.07-177.3h24v-80h104.56v80h28.74v-80h104.56v80h24V-313q36.24-10.43 65.62-30.41 29.38-19.98 50.38-46.86 21-26.88 32.39-60.16 11.38-33.29 11.38-69.91 0-117.75-83.68-190.05-83.68-72.31-218.89-72.31-135.21 0-219.02 72.31-83.81 72.3-83.81 190.05 0 36.62 11.38 69.91 11.39 33.28 32.39 60.2t50.38 46.86q29.38 19.94 65.62 30.27v135.8Zm60.26-139.59h165.34L480-482.24l-82.67 165.35Zm-57.28-109.63q38.79 0 66.11-27.48 27.32-27.47 27.32-66.05 0-38.79-27.37-66.11t-66.04-27.32q-38.67 0-66.11 27.37-27.44 27.37-27.44 66.04T274-453.96q27.47 27.44 66.05 27.44Zm280 0q38.79 0 66.11-27.48 27.32-27.47 27.32-66.05 0-38.79-27.37-66.11t-66.04-27.32q-38.67 0-66.11 27.37-27.44 27.37-27.44 66.04T554-453.96q27.47 27.44 66.05 27.44ZM480-177.3Z" />
                                </svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Terror, Horror</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Terror, Horror</h3>

                                <p class="mt-4 text-sm sm:text-base">
                                    Te moriras del susto, te lo aseguro.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=action" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M155-120.96q-51.3 0-87.13-36.22-35.83-36.23-35.83-86.73v-472.18q0-50.5 35.83-86.73 35.83-36.22 87.13-36.22h471.61q51.3 0 87.13 36.22 35.83 36.23 35.83 86.73v164.31l126.04-125.48q14.69-15.26 33.52-7.15 18.83 8.1 18.83 28.41v352q0 20.31-18.83 28.41-18.83 8.11-33.52-7.15L749.57-408.22v164.31q0 50.5-35.83 86.73-35.83 36.22-87.13 36.22H155Zm0-122.95h471.61v-472.18H155v472.18Zm0 0v-472.18 472.18Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Accion</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Accion</h3>

                                <p class="mt-4 text-sm sm:text-base">
                                    Accion a tope.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=comedy" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M480.01-250.52q68.25 0 119.95-42.85 51.69-42.85 64.39-107.54 3.13-14.7-7.02-25.89-10.15-11.2-25.94-11.2H328.61q-15.7 0-25.61 11.2-9.91 11.19-7.35 25.89 12.7 64.69 64.4 107.54 51.71 42.85 119.96 42.85Zm.27 210.43q-82.98 0-155.79-31.06-72.81-31.06-127.6-85.16-54.79-54.1-85.79-126.82Q80.09-355.85 80.09-438v-358.96q0-51.78 35.58-87.37 35.59-35.58 87.37-35.58h553.92q51.78 0 87.37 35.58 35.58 35.59 35.58 87.37V-438q0 82.15-31.45 154.87t-85.64 126.82q-54.19 54.1-127.16 85.16-72.96 31.06-155.38 31.06Zm-.42-122.95q115.75 0 196.42-80.18 80.68-80.17 80.68-194.95v-358.79H203.04v358.79q0 114.78 80.04 194.95 80.04 80.18 196.78 80.18ZM480-480ZM352-709.35q-33.26 0-59.17 18.07-25.92 18.06-37.05 47.19-5.56 13.7 4.28 25.39 9.85 11.7 26.11 11.7h132.22q15.26 0 24.89-11.41 9.63-11.42 5.5-25.68-11.13-29.13-37.32-47.19-26.2-18.07-59.46-18.07Zm255 0q-33.26 0-59.46 18.07-26.19 18.06-37.89 47.19-5.56 13.7 4.68 25.39 10.24 11.7 26.28 11.7h132.22q15.1 0 25.09-11.41 9.99-11.42 5.86-25.68-11.13-29.13-37.66-47.19-26.52-18.07-59.12-18.07Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Comedia</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Comedia</h3>

                                <p class="mt-4 text-sm sm:text-base">
                                    Buen humor.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=thriller" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M441.08-236.91q119.49 0 203.12-83.31 83.63-83.3 83.63-202.89 0-119.32-83.77-202.74-83.77-83.41-202.27-83.41-119.52 0-202.92 83.28-83.39 83.29-83.39 202.54 0 119.52 83.13 203.02 83.13 83.51 202.47 83.51Zm.35-285.96Zm0 172.26q-75 0-138.4-38.12-63.41-38.13-99.16-104.18-7.57-14.01-7.28-29.84.28-15.82 7.84-29.51 35.75-66.05 98.97-104.18 63.21-38.13 137.9-38.13t137.63 38.16q62.94 38.15 98.94 104.15 7.56 14.01 7.85 29.83.28 15.82-7.29 29.52-36 66-99.2 104.15-63.2 38.15-137.8 38.15Zm.6-83.96q49.27 0 91.21-23.55 41.93-23.55 67.93-64.74-26-40.31-68.02-64.03-42.03-23.72-91.72-23.72-50.89 0-92.59 23.96-41.71 23.97-67.71 64 26 40.9 67.81 64.49 41.81 23.59 93.09 23.59Zm-.6-16.04q30.11 0 51.19-21.06 21.08-21.07 21.08-51.2 0-29.87-21.08-50.78-21.08-20.92-51.19-20.92-30.13 0-51.19 20.92-21.07 20.91-21.07 50.78 0 30.13 21.07 51.2 21.06 21.06 51.19 21.06Zm0 325.35q-82.47 0-155.06-31.07-72.59-31.06-126.5-85.19-53.91-54.13-84.98-126.74-31.06-72.62-31.06-155.11 0-82.64 31.06-154.83 31.07-72.19 84.82-126.08 53.76-53.89 126.47-85.26 72.71-31.37 155.35-31.37 82.67 0 154.91 31.35 72.25 31.35 126.3 85.26 54.04 53.91 85.39 126.09 31.35 72.19 31.35 155.09 0 69.57-22.2 131.8-22.2 62.23-61.67 112.84l121.3 121.31q16.13 16.13 16.42 38.69.28 22.57-15.85 38.65-16.18 16.74-39.42 16.74-23.23 0-39.1-16.69L676.65-201.52q-49.53 36.2-109.06 56.23-59.53 20.03-126.16 20.03Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Thriller</h2>
                            </div>
                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Thriller</h3>
                                <p class="mt-4 text-sm sm:text-base">
                                    En la oscuridad de la noche, cada sombra es un secreto y cada susurro, una amenaza.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -m-4 mb-2">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=romance" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M479.43-113.52q-22.82 0-44.13-8.44-21.3-8.44-39.17-24.65l-80.04-73.04q-101.57-93-188.79-192.13-87.21-99.13-87.21-227.39 0-109.9 74.01-184.04 74.01-74.14 183.41-74.14 56.66 0 103.1 21.18 46.43 21.17 78.82 48.87 32.4-27.7 78.83-48.87 46.44-21.18 103.1-21.18 109.62 0 184.37 74.14t74.75 184.04q0 128.26-88.07 227.67-88.06 99.41-189.76 191.98l-79.24 73.37q-17.93 16.37-39.54 24.5-21.61 8.13-44.44 8.13Zm-50-582.57q-17.56-30.13-52.19-54.21-34.63-24.09-78.91-24.09-58.24 0-96.76 38.3-38.53 38.31-38.53 97.28 0 51.99 36.43 109.46 36.44 57.47 87.45 112.53 51.01 55.06 104.94 102.31 53.92 47.24 87.57 78.03 33.87-31.43 88.07-78.88 54.2-47.45 105.18-101.89 50.97-54.45 87.91-112.03 36.93-57.59 36.93-109.83 0-58.67-39.17-96.98-39.16-38.3-97.21-38.3-44.77 0-79.67 24.09-34.9 24.08-51.47 54.21-8.73 14-22.02 21.5-13.28 7.5-28.44 7.5-14.76 0-27.64-7.5t-22.47-21.5ZM480-505.43Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Romance</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Romance</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=fantasy" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M197.39-346.44q8.61-2.51 18.06-3.97 9.44-1.46 21.05-1.46h40.89v-450.74h-38.87q-17.56 0-29.35 11.78-11.78 11.79-11.78 29.35v415.04Zm38.87 306.35q-65.45 0-110.81-45.19-45.36-45.2-45.36-110.42v-565.78q0-66.01 45.62-112.22 45.63-46.21 111.81-46.21H442.7q24.03 0 41.34 17.31 17.31 17.3 17.31 41.34 0 24.03-17.31 41.34-17.31 17.31-41.34 17.31h-48v450.74h170.6v-10.83q0-24.03 17.31-41.34 17.31-17.31 41.35-17.31 24.03 0 41.34 17.31 17.31 17.31 17.31 41.34v125.31H236.54q-16.8 0-27.97 11.78-11.18 11.78-11.18 28.5t11.18 28.22q11.17 11.5 28.07 11.5h525.97V-402.7q0-24.03 17.31-41.34 17.31-17.31 41.34-17.31 24.04 0 41.34 17.31 17.31 17.31 17.31 41.34v239.66q0 51.78-35.58 87.37-35.59 35.58-87.37 35.58h-520.7Zm-38.87-306.35V-802.61v456.17ZM700-461.35q0-99.8 69.43-169.22Q838.85-700 938.65-700q-99.8 0-169.22-69.43Q700-838.85 700-938.65q0 99.8-69.43 169.22Q561.15-700 461.35-700q99.8 0 169.22 69.43Q700-561.15 700-461.35Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Fantasia</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Fantasia</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=sci-fi" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M196.26-80.09q-73.78 0-105.11-65.93-31.32-65.94 15.2-122.46l217.48-263.48v-217.91h-17.31q-25.39 0-43.22-17.98-17.82-17.98-17.82-43.93 0-25.39 17.82-43.65 17.83-18.27 43.22-18.27h346.96q26.39 0 44.87 17.77 18.48 17.76 18.48 44.15 0 26.39-18.48 44.15-18.48 17.76-44.87 17.76h-15.87v217.91l216.04 263.48q46.52 56.52 14.98 122.46-31.54 65.93-104.89 65.93H196.26Zm116.83-170.43h335.26L531.7-391.78H429.74L313.09-250.52Zm-102.13 47.48h538.08L514.65-489.17v-260.7h-67.87v260.7L210.96-203.04ZM480-476.74Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Ficcion</h2>
                            </div>

                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Ficcion</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="Category.php?category=animation" class="group relative block h-64 sm:h-80 lg:h-96">
                        <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                        <div
                            class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                            <div
                                class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#4b5563"><path d="M358.57-47.43q-65 0-121.29-24.22-56.28-24.22-98.85-66.78Q95.87-181 71.65-237.28q-24.22-56.29-24.22-121.29 0-90.13 44.94-163.13 44.93-73 115.37-110.3 20.43-39.57 50.56-69.7 30.13-30.13 69.7-50.56 35.43-70.44 111.57-115.37 76.13-44.94 161.86-44.94 65 0 121.29 24.22 56.28 24.22 98.85 66.78 42.56 42.57 66.78 99.42t24.22 121.85q0 86.34-42.83 158.63Q826.91-369.39 752.26-328q-17.61 34.48-50.56 68.85-32.96 34.37-69.7 50.85-37.3 70.43-109.96 115.65-72.65 45.22-163.47 45.22Zm-.31-113.92q27.48.57 52.52-3.22 25.05-3.78 45.96-13.65-57.48-2.69-107.24-25.06-49.76-22.37-87.93-59.98-38.18-37.61-60.05-86.52-21.87-48.92-23.56-105.83-9.31 24.48-12.96 47.09-3.65 22.61-3.65 49.95 0 41.31 15.22 76.9 15.21 35.58 41.08 62.45 26.87 26.44 62.81 41.87 35.93 15.44 77.8 16Zm122.87-120.87q26.35 0 49.17-3.43 22.83-3.44 46.74-13.74-56.04-5-105.15-28.09-49.11-23.09-86.28-60.69-37.74-38.18-60.33-86.94-22.58-48.76-27.02-104.8-8.74 24.91-12.39 48.67-3.65 23.76-3.65 51.24 0 40.87 15.72 76.74 15.71 35.87 43.15 62.74 26.87 27.43 63.02 42.87 36.15 15.43 77.02 15.43Zm120.3-121.43q19.87 0 36.33-2.72 16.46-2.72 33.46-10.15 15.87-58.61-.07-111.57-15.93-52.95-52.8-91.26-37.31-37.74-90.26-53.89-52.96-16.15-111.57-.28-7.43 19.43-10.15 36.11-2.72 16.67-2.72 35.98 0 41.43 15.44 77.02 15.43 35.58 42.87 62.45 26.87 27.44 62.45 42.87 35.59 15.44 77.02 15.44Zm182.31-105.61q8.17-16.61 11.54-38.78 3.37-22.18 3.37-53.39 0-40.87-15.15-76.74t-42.02-62.74q-26.87-26.87-62.46-42.31-35.59-15.43-76.45-15.43-31.09 0-54.77 4.37-23.67 4.37-40.84 12.54 54.48 6.7 101.8 29.57 47.33 22.87 84.5 58.6 37.74 36.18 61.04 83 23.31 46.83 29.44 101.31Z"/></svg>
                                <h2 class="mt-4 text-xl font-medium sm:text-2xl">Animacion</h2>
                            </div>
                            <div
                                class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">Animacion</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <div id="blankSpace"></div>

    <div class="banner">
        <img src="../img/banner.png" class="banner">
    </div>
</body>