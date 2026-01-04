<nav class="navbar navbar-expand-lg navbar-dark custom-nav py-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <img src="{{ asset('storage/images/1000000645.jpg') }}" alt="Лого" class="nav-logo-img">
            <div class="brand-text-wrapper">
                <span class="brand-title">АНЂЕЛ ШЕВИЋ</span>
                <span class="brand-subtitle">ИКОНОПИСНА РАДИОНИЦА</span>
            </div>
        </a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExtra">
            <span class="toggler-text">Мени <i class="fas fa-chevron-down"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarExtra">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link nav-custom-link" href="/">Почетна</a></li>
                <li class="nav-item"><a class="nav-link nav-custom-link" href="/about">О нама</a></li>
                <li class="nav-item"><a class="nav-link nav-custom-link" href="/shop">Продавница</a></li>
                <li class="nav-item"><a class="nav-link nav-custom-link" href="/contact">Контакт</a></li>
                <li class="nav-item"><a class="nav-link nav-custom-link" href="/cart">Корпа <i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(auth()->user()->role === 'admin')
                        <li class="nav-item"><a class="nav-link nav-custom-link small" href="{{ route('product.new') }}">Додај</a></li>
                        <li class="nav-item"><a class="nav-link nav-custom-link small" href="/admin/products/all">Уреди</a></li>
                        <li class="nav-item"><a class="nav-link nav-custom-link small" href="{{ route('all.contacts') }}">Контакти</a></li>
                        <li class="nav-item"><a class="nav-link nav-custom-link small" href="{{ route('all.orders') }}">Наруџбине</a></li>
                    @endif

                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle auth-dropdown text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Профил</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </li>
                        </ul>
                    </li>
                @else
                    <div class="d-flex gap-2">
                        <a class="btn btn-nav-gold" href="{{ route('login', ['redirect' => url()->current()]) }}">Пријави се</a>
                        <a class="btn btn-nav-gold" href="{{ route('register', ['redirect' => url()->current()]) }}">Региструј се</a>
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>

