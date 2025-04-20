@extends('admin.layouts.admin')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="row">
    <div class="col-md-10">
        <p>Welcome to the catalog editor page.</p> 
    </div>
    <div class="col-md-2">
    <form action="{{ route('admin.toy.add') }}" method="post">
        @csrf
        @method('GET')
        <button class="btn btn-primary">Add A New Toy</button>
    </form>
    </div>
</div>

<h2><b>Toys in Stock</b></h2>
<div class="row admin-table">
    <div class="col-md-1 admin-index admin-header">
    <h4>ID</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Image</h4>
    </div>
    <div class="col-md-6 admin-index admin-header">
    <h4>Name</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Price</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Stock</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Edit</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Delete</h4>
    </div>
    @foreach($viewdata['toys'] as $toy)
    @if($toy->getQuantity() > 0)
    <div class="col-md-1 admin-index center-font">
    <h6>{{ $toy->getId() }}</h6>
    </div>
    <div class="col-md-1 admin-index">
    <img src="{{ asset('/images/'.$toy->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-6 admin-index">
    <h6>{{ $toy->getName() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <h6>${{ $toy->getPrice() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <h6>{{ $toy->getQuantity() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <form action="{{ route('admin.toy.edit', ['id'=> $toy->getId()]) }}" method="post">
        @csrf
        @method('GET')
        <button class="btn btn-primary">EDIT</button>
    </form>
    </div>
    <div class="col-md-1 admin-index center-font">
    <form action="{{ route('admin.toy.delete', ['id'=> $toy->getId()]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">DELETE</button>
    </form>
    </div>
    @endif
    @endforeach
</div>
<h2><b>Toys out of Stock</b></h2>
<div class="row admin-table">
    <div class="col-md-1 admin-index admin-header">
    <h4>ID</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Image</h4>
    </div>
    <div class="col-md-6 admin-index admin-header">
    <h4>Name</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Price</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Stock</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Edit</h4>
    </div>
    <div class="col-md-1 admin-index admin-header">
    <h4>Delete</h4>
    </div>
    @foreach($viewdata['toys'] as $toy)
    @if($toy->getQuantity() == 0)
    <div class="col-md-1 admin-index center-font">
    <h6>{{ $toy->getId() }}</h6>
    </div>
    <div class="col-md-1 admin-index">
    <img src="{{ asset('/images/'.$toy->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-6 admin-index">
    <h6>{{ $toy->getName() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <h6>${{ $toy->getPrice() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <h6>{{ $toy->getQuantity() }}</h6>
    </div>
    <div class="col-md-1 admin-index center-font">
    <form action="{{ route('admin.toy.edit', ['id'=> $toy->getId()]) }}" method="post">
        @csrf
        @method('GET')
        <button class="btn btn-primary">EDIT</button>
    </form>
    </div>
    <div class="col-md-1 admin-index center-font">
    <form action="{{ route('admin.toy.delete', ['id'=> $toy->getId()]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">DELETE</button>
    </form>
    </div>
    @endif
    @endforeach
</div>
@endsection