<div class="search-container">
    <form action="SearchResults.php" method="post">
        <label for="search"
            class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
            <input type="text" id="search" name="search" placeholder="Busca por título"
                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />
            <span
                class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                Busca por título
            </span>
        </label>
        <button type="submit"
            class="hidden mt-4 items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
            Buscar
            <i class="ml-2 fa fa-search"></i>
        </button>
    </form>
</div>