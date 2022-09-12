<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <h1 class="title">
                    blog
                </h1>
                <a class="navbar-item" href='/'>
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        main info
                    </a>

                    <div class="navbar-dropdown">
                        <a href="{{ route('articles.index') }}" class="navbar-item">
                            articles
                        </a>
                        <a href="{{ route('categories.index') }}" class="navbar-item">
                            categories
                        </a>
                        <a href="{{ route('tags.index') }}" class="navbar-item">
                            tags
                        </a>

                    </div>
                    <a class="navbar-item" href="/aboutme">
                        About me
                    </a>
                </div>
            </div>

            <form action="/search" method="GET">
                <input type="text" name="search" required />
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="navbar-item">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" class="button is-light" value="Logout">
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </div>
        </div>
        </div>
    </nav>
</body>
