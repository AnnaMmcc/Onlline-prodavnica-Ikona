<nav class="navbar navbar-expand-lg navbar-dark brown-bg py-2">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="max-width: 250px;">
            <img src="{{ asset('storage/images/1000000645.jpg') }}" alt="Лого" style="height: 50px; width: auto; object-fit: contain;" class="me-2">
            <div style="line-height: 1; font-size: 0.8rem; color: white; font-family: 'Playfair Display', serif;">
                <span style="font-weight: bold; font-size: 0.9rem; display: block;">АНЂЕЛ ШЕВИЋ</span>
                <span style="color: #d4af37; letter-spacing: 1px;">ИКОНОПИСНА РАДИОНИЦА</span>
            </div>
        </a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExtra">
            <span class="toggler-text" style="font-size: 0.8rem;">Мени <i class="fas fa-chevron-down"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarExtra">
            <ul class="navbar-nav mx-auto text-uppercase" style="font-size: 0.85rem;">
                <li class="nav-item"><a class="nav-link text-white px-3" href="/">Почетна</a></li>
                <li class="nav-item"><a class="nav-link text-white px-3" href="/about">О нама</a></li>
                <li class="nav-item"><a class="nav-link text-white px-3" href="/shop">Продавница</a></li>
                <li class="nav-item"><a class="nav-link text-white px-3" href="/contact">Контакт</a></li>
                <li class="nav-item"><a class="nav-link text-white px-3" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>

            <div class="d-flex gap-2 align-items-center">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a class="nav-link text-white small me-2" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
                    <a class="btn btn-sm btn-outline-warning" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @else
                    <a class="btn btn-sm btn-outline-warning fw-bold" href="{{ route('login') }}">Пријава</a>
                    <a class="btn btn-sm btn-warning fw-bold" href="{{ route('register') }}">Регистрација</a>
                @endif
            </div>
        </div>
    </div>
</nav>
