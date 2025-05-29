<nav class="navbar navbar-expand-lg navbar-light light-bg">
    <div class="container-fluid">

        <a class="navbar-brand text-brown" href="/">Andjel Šević<br>Ikonopisna radionica</a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExtra" aria-controls="navbarExtra" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarExtra">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Glavna</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">O nama</a></li>
                <li class="nav-item"><a class="nav-link" href="/shop">Ikone - Prodavnica</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link" href="/cart">Korpa <i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>


            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <!-- Logout dugme -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="{{ route('register') }}">Register</a></li>
                @endif

                @if(auth()->check() && auth()->user()->role === 'admin')
                    <li class="nav-item"><a class="nav-link" href="{{ route('product.new') }}">Dodaj ikonu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/products/all">Edituj | Briši</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('all.contacts') }}">Kontakti</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('all.orders') }}">Narudžbine</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
