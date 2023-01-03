<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }}</title>
    @vite(['resources/css/admin/app.scss'])
    @vite(['resources/js/app.js'])
</head>

<body>
    <header class="header">
        @include('admin.layouts.header')
    </header>

    <main class="main">
        <div class="container">
            @if (Request::path() !== 'admin')
                <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
                    <ol class="breadcrumb m-0">
                        @if (count(Request::segments()) === 3)
                            <li class="breadcrumb-item active" aria-current="page">
                                <a class="breadcrumb-link"
                                    href="/{{ Request::segment(1) }}">{{ Request::segment(1) }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}"
                                    class="breadcrumb-link">{{ Request::segment(2) }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="breadcrumb-link current-link">{{ Request::segment(3) }}</a>
                            </li>
                        @elseif(count(Request::segments()) === 4)
                            <li class="breadcrumb-item active" aria-current="page">
                                <a class="breadcrumb-link"
                                    href="/{{ Request::segment(1) }}">{{ Request::segment(1) }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}"
                                    class="breadcrumb-link">{{ Request::segment(2) }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/{{ Request::segment(3) }}"
                                    class="breadcrumb-link">{{ Request::segment(3) }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="breadcrumb-link current-link">{{ Request::segment(4) }}</a>
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
</body>

</html>
