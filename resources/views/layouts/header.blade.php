@section('header')
<header>
    @guest
    @else
    @if($viewdata['user']->getRole()=='admin')
    <a class="adminbutton" href="{{route('admin.home.index')}}">
    <button>Admin Hub</button>
    </a>
    @endif
    <h3>Welcome {{$viewdata['user']->getName()}} | Balance: ${{$viewdata['user']->getBalance()}}</h3>
    @endguest
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
            <li>
                <form id="logout" action="{{ route('logout') }}" method="post">
                    @csrf
                    <a class="nav-link active" role="button" onclick="document.getElementById('logout').submit();">Logout</a>
                </form>
            </li>
            @endguest
        </ul>
    </nav>
</header>
@endsection