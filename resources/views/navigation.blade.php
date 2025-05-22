<nav class="navbar navbar-expand-lg navbar-light light-bg">
    <a class="navbar-brand text-brown"  href="/">Andjel Šević<br> Ikonopisna radionica </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Glavna</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">O nama</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/shop">Ikone - Prodavnica</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/contact">Kontakt</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href='/cart'>Korpa</a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li>
                    <a
                        href="#"
                        class="btn btn-primary"
                        style="box-shadow: none !important; outline: none !important;"
                        tabindex="-1"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li><a class="btn dark-bg" href="{{route('login')}}">Login</a></li>
            <div class="ml-1">
                <li><a class="btn dark-bg" href="{{route('register')}}">Register</a></li>
            </div>
            @endif
        </ul>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if(auth()->check() && auth()->user()->role === 'admin')

                    <li class="nav-item">
                        <a class="nav-link text-brown" href="{{ route('product.new') }}">Dodaj ikonu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-brown" href="/admin/products/all">Edituj|Brisi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-brown" href="{{route('all.contacts')}}">Kontakti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-brown" href="{{route('all.orders')}}">Narudzbine</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
