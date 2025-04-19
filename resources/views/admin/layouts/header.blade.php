@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.home.index') }}">Toy Webstore Administration</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a>
                <a class="nav-link active" href="{{ route('admin.toy.index') }}">Catalog Management</a>
                <a class="nav-link active" href="{{ route('home.index') }}">Back to Home</a>
            </div>
        </div>
    </div>
</nav>
@endsection