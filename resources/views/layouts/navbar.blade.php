<nav class="flex items-center flex-wrap p-3 sm:py-2 lg:py-2 bg-yellow-300 
    dark:bg-yellow-700 font-bold"
>
    <a href="{{ url('/') }}" class="text-lg text-gray-700 tracking-wide">Only Beleive</a>

    <button 
        class="w-6 h-6 inline-flex hover:text-red-600 rounded lg:hidden 
            ml-auto nav-toggler"
        data-target="#navigation"
    >
        <x-heroicon-o-menu/>
    </button>

    <div 
        class="top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto hidden" 
        id="navigation"
    >
        <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
            <form action="{{ route('web.search') }}" method="GET" 
                class="relative flex items-center lg:py-0 py-3 lg:pr-20"
            >
                @csrf

                <button type="submit" name="submit" 
                    class="w-5 h-5 absolute ml-3 cursor-pointer"
                >
                    <x-heroicon-o-search />
                </button>

                <input type="text" placeholder="Rechercher..." name="query"
                    class="font-semibold w-80 py-2 pl-10 pr-5 rounded-2xl bg-gray-900 
                        bg-opacity-10 placeholder-gray-500 ring-1 ring-yellow-200"
                />
            </form>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-600 underline hover:text-red-700 lg:inline-flex lg:w-auto lg:px-3 py-2
                    rounded">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                        class="text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700 lg:inline-flex lg:w-auto lg:px-3 py-2
                        rounded"
                    >
                        Se Connecter
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                            class="text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700 lg:inline-flex lg:w-auto lg:px-3 py-2
                            rounded"
                        >
                            S'inscrire
                        </a>
                    @endif
                @endauth

                <a href="#" class="text-sm text-gray-700 dark:text-gray-600 
                    underline hover:no-underline hover:text-red-700 lg:inline-flex 
                    lg:w-auto lg:px-3 py-2 rounded"
                >
                    About Us
                </a>
                <a href="#" class="text-sm text-gray-700 dark:text-gray-600 
                    underline hover:no-underline hover:text-red-700 lg:inline-flex 
                    lg:w-auto lg:px-3 py-2 rounded"
                >
                    Contact
                </a>
            @endif
        </div>
    </div>
</nav>