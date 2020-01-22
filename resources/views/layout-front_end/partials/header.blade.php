<!-- Header -->
    {{-- <header id="header" class="alt">
        <a href="#menu">Menu</a>
    </header> --}}

<!-- Nav -->
    {{-- <nav id="menu">
        <ul class="links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('comunications') }}">Comunicazioni</a></li>
            <li><a href="{{ route('contact') }}">Contatti</a></li>
        </ul>
    </nav> --}}

<!-- Header -->
{{-- id="header" --}}
    <header class="nav-dsk">
        {{-- inserire logo nel navbar creando un div per il logo e uno per la lista --}}
        <nav class="nav-container">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('comunications') }}">Comunicazioni</a></li>
                <li><a href="{{ route('contact') }}">Contatti</a></li>
            </ul>
        </nav>
    </header>
