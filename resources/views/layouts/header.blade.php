@section('header')
<header>
    <h1>@yield('subtitle', 'Toy Store')</h1>
    <nav id="navigation-bar">
        <ul>
            <li><a class="nav-link active" href="{{ route('home.index') }}">Home</a></li>
            <li><a class="nav-link active" href="{{ route('toy.index') }}">Catalog</a></li>
            @guest
            <li><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link active" href="{{ route('register') }}">Register</a></li>
            @else
            <li><a class="nav-link active" href="{{ route('toy.checkout') }}">Checkout</a></li>
            <li><a class="nav-link active" href="{{ route('logout') }}" onclick="document.getElementById('logout').submit();">Logout</a></li>
            @endguest
        </ul>
    </nav>
</header>
@endsection