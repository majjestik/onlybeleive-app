<header class="bg-yellow-300 py-6">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-700 no-underline">
                {{-- {{ config('app.name', 'Laravel') }} --}} Accueil
            </a>
        </div>
        <nav class="space-x-4 text-gray-700 text-sm sm:text-base font-bold">
            @guest
                <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <span>{{ Auth::user()->name }}</span>

                <a href="{{ route('logout') }}"
                   class="no-underline hover:underline"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </nav>
    </div>
</header>