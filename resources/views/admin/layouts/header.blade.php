<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt=""
                srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-tabs m-auto menu">
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is('admin') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('admin') }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is('admin/admin_blog') || request()->is('admin/admin_blog/*') ? 'active' : '' }}"
                        href="{{ route('admin_blog.index') }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is('admin/admin_category') || request()->is('admin/admin_category/*') ? 'active' : '' }}"
                        href="{{ route('admin_category.index') }}">
                        Category
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is('admin/admin_contact') || request()->is('admin/admin_contact/*') ? 'active' : '' }}"
                        href="{{ route('admin_contact.index') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
