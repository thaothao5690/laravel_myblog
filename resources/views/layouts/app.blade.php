<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'myBLOG' }}</title>
    @vite(['resources/css/app.scss'])
    @vite(['resources/js/app.js'])
</head>

<body>
    <header class="header">
        @include('layouts.header')
    </header>

    <main class="main">
        <div class="container">
            @if (Request::path() !== '/')
                <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home') }}">Home</a></li>
                        @if (count(Request::segments()) === 3)
                            <li class="breadcrumb-item active" aria-current="page">
                                <a class="breadcrumb-link"
                                    href="/{{ Request::segment(1) }}">{{ Request::segment(1) }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a class="breadcrumb-link"
                                    href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}">{{ Request::segment(2) }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a class="breadcrumb-link current-link">{{ Request::segment(3) }}</a>
                            </li>
                        @else
                            @for ($i = 1; $i <= count(Request::segments()); $i++)
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if (($i < count(Request::segments())) & ($i > 0))
                                        <a class="breadcrumb-link"
                                            href="/{{ Request::segment($i) }}">{{ Request::segment($i) }}</a>
                                    @else
                                        <a class="breadcrumb-link current-link">{{ Request::segment($i) }}</a>
                                    @endif
                                </li>
                            @endfor
                        @endif
                    </ol>
                </nav>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="footer">
        @include('layouts.footer')
    </footer>
</body>

</html>
