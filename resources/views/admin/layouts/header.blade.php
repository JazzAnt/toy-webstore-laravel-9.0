@section('header')
<header>
    <h1>@yield('subtitle', 'Toy Webstore Administration')</h1>
    <nav id="navigation-bar">
        <ul>
            <li><a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a></li>
            <li><a class="nav-link active" href="{{ route('admin.toy.index') }}">Catalog Management</a></li>
            <li><a class="nav-link active" href="{{ route('home.index') }}">Back to Home</a></li>
            <li><a class="nav-link active" href="{{ route('logout') }}" onclick="document.getElementById('logout').submit();">Logout</a></li>
        </ul>
    </nav>
</header>
@endsection