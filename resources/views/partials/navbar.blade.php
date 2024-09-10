@php
    $headermenu = config('datamenu.headermenu');
@endphp

<header>
    <div class="container">
        <a href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </a>
        <nav>
            <ul>
                @foreach ($headermenu as $link)
                    <li><a href="{{ route($link) }}">{{ $link }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
