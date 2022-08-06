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
                <a href="{{ route('articles.index') }}" class="navbar-item">
                    articles
                </a>
                <a class="navbar-item" href="/aboutme">
                    About me
                </a>
            </div>
        </div>


        </div>

        <div class="navbar-item">
            @auth


                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" class="button is-light" value="Logout">
                </form>
            @endauth
        </div>
        </div>
        </div>
        </div>
    </nav>
</body>
