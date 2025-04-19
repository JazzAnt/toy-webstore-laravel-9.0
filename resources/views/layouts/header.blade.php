@section('header')
<header>
    <h1>@yield('subtitle', 'Toy Store')</h1>
    <nav id="navigation-bar">
        <ul>
            <li><a class="nav-link active" href="{{ route('home.index') }}">Home</a></li>
            <li><a class="nav-link active" href="{{ route('home.about') }}">About</a></li>
            <li><a class="nav-link active" href="{{ route('toy.index') }}">Catalog</a></li>
            <li><a class="nav-link active" href="{{ route('toy.checkout') }}">Checkout</a></li>
        </ul>
    </nav>
</header>
@endsection