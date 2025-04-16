@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">TOY WEBSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                <a class="nav-link active" href="{{ route('home.contact') }}">Contact</a>
                <a class="nav-link active" href="{{ route('toy.index') }}">Products</a>
                <a class="nav-link active" href="{{ route('toy.checkout') }}">Checkout</a>
            </div>
        </div>
    </div>
</nav>
@endsection