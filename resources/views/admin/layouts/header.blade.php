@section('header')
<header class="adminnav">
    <h1>@yield('subtitle', 'Toy Webstore Administration')</h1>
    <nav id="navigation-bar">
        <ul>
            <li><a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a></li>
            <li><a class="nav-link active" href="{{ route('admin.toy.index') }}">Catalog Management</a></li>
            <li><a class="nav-link active" href="{{ route('home.index') }}">Back to Home</a></li>
            <li>
                <form id="logout" action="{{ route('logout') }}" method="post">
                    @csrf
                    <a class="nav-link active" role="button" onclick="document.getElementById('logout').submit();">Logout</a>
                </form>
            </li>
        </ul>
    </nav>

</header>
@endsection