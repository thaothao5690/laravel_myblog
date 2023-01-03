<div class="auth">
    @if (Auth::user())
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <span>Welcome {{ Auth::user()->name }}, </span>
            <button class="logout" type="submit">Logout</button>
        </form>
    @else
        <span>Welcome, </span>
        <a class="login" href="{{ route('login') }}">Login</a>
        <a class="register" href="{{ route('register') }}">Register</a>
    @endif
</div>


<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <span class="navbar-text slogan">
                myBLOG - find your inspiration here.
            </span>
            <ul class="navbar-nav ms-auto menu">
                <li class="nav-item menu-item">
                    <a class="nav-link menu-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link menu-link {{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}"
                        href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link menu-link {{ request()->is('category') || request()->is('category/*') ? 'active' : '' }}"
                        href="{{ route('category.index') }}" role="button">
                        Category
                    </a>
                </li>
                <li class="nav-item menu-item">
                    <a href="{{ route('contact-us.index') }}"
                        class="nav-link menu-link {{ request()->is('contact-us') || request()->is('contact-us/*') ? 'active' : '' }}">
                        Contact Us
                    </a>
                </li>
                <li class="nav-item menu-item">
                    <a href="{{ route('about-us') }}"
                        class="nav-link menu-link {{ request()->is('about-us') ? 'active' : '' }}">About
                        Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
