<nav>
    <div
        class="relative z-10 row p-4 lg:px-8 flex justify-between w-full flex-wrap items-center bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
        <div class="logo">
            <a href="/" class=" text-2xl">Users Crud</a>
        </div>
        <div class="nav-links">
            @guest
                <div>
                    <a class="link-nav" href="{{ route('login') }}">Login</a>
                    <a class="link-nav" href="{{ route('register') }}">Register</a>
                </div>
            @endguest
            @auth
                <ul class="flex row gap-4">
                    <li><a href="{{ route('home') }}" class="link-nav">Home</a></li>
                    <li><a href="{{ route('profile') }}">{{ Auth::user()->username }}</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class=" hover:scale-110">Logout</button>
                        </form>
                    </li>
                </ul>

            @endauth
        </div>
    </div>
</nav>
