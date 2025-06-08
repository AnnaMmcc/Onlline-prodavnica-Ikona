<nav class="navbar navbar-expand-lg navbar-light brown-bg">
    <div class="container-fluid">

        <a class="navbar-brand brand-logo text-white d-flex align-items-center gap-2" href="{{ url('/') }}">
            <img src="{{ asset('storage/images/1000000645.jpg') }}" alt="Лого" style="height: 60px;">
            <span>
        Анђел Шевић<br>
        Иконописна<br>
        радионица
    </span>
        </a>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExtra" aria-controls="navbarExtra" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarExtra">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link text-white" href="/">Почетна</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/about">О нама</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/shop">Иконе - Продавница</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/contact">Контакт</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/cart">Корпа <i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning text-white fw-bold" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <div class="d-flex gap-2">
                        <a class="btn btn-warning fw-bold" href="{{ route('login', ['redirect' => url()->current()]) }}">Пријави се</a>
                        <a class="btn btn-warning fw-bold" href="{{ route('register', ['redirect' => url()->current()]) }}">
                            Региструј се
                        </a>
                    </div>
                @endif

                @if(auth()->check() && auth()->user()->role === 'admin')
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('product.new') }}">Додај икону</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/admin/products/all">Уреди | Обриши</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('all.contacts') }}">Контакти</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('all.orders') }}">Нарџбине</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Профил</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

