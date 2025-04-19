@extends('admin.layouts.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<h2>Toys in Stock</h2>
<div class="row">
    <div class="col-md-2">
    <h6>Image</h6>
    </div>
    <div class="col-md-4">
    <h6>Name</h6>
    </div>
    <div class="col-md-2">
    <h6>Price</h6>
    </div>
    <div class="col-md-2">
    <h6>Stock</h6>
    </div>
    <div class="col-md-1">
    <h6>Edit</h6>
    </div>
    <div class="col-md-1">
    <h6>Delete</h6>
    </div>
    @foreach($viewdata['toys'] as $toy)
    @if($toy->getQuantity() > 0)
    <div class="col-md-2">
    <img src="{{ asset('/img/'.$toy->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-4">
    <h6>{{ $toy->getName() }}</h6>
    </div>
    <div class="col-md-2">
    <h6>${{ $toy->getPrice() }}</h6>
    </div>
    <div class="col-md-2">
    <h6>{{ $toy->getQuantity() }}</h6>
    </div>
    <div class="col-md-1">
    <a href="{{ route('admin.toy.edit', [id=> $toy->getId()]) }}"><h6>EDIT</h6></a>
    </div>
    <div class="col-md-1">
    <form action="{{ route('admin.toy.delete', [id=> $toy->getId()]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn">DELETE</button>
    </form>
    </div>
    @endif
    @endforeach
</div>
<h2>Toys out of Stock</h2>
<div class="row">
    <div class="col-md-2">
    <h6>Image</h6>
    </div>
    <div class="col-md-4">
    <h6>Name</h6>
    </div>
    <div class="col-md-2">
    <h6>Price</h6>
    </div>
    <div class="col-md-2">
    <h6>Stock</h6>
    </div>
    <div class="col-md-1">
    <h6>Edit</h6>
    </div>
    <div class="col-md-1">
    <h6>Delete</h6>
    </div>
    @foreach($viewdata['toys'] as $toy)
    @if($toy->getQuantity() == 0)
    <div class="col-md-2">
    <img src="{{ asset('/img/'.$toy->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-4">
    <h6>{{ $toy->getName() }}</h6>
    </div>
    <div class="col-md-2">
    <h6>${{ $toy->getPrice() }}</h6>
    </div>
    <div class="col-md-2">
    <h6>{{ $toy->getQuantity() }}</h6>
    </div>
    <div class="col-md-1">
    <a href="{{ route('admin.toy.edit', [id=> $toy->getId()]) }}"><h6>EDIT</h6></a>
    </div>
    <div class="col-md-1">
    <form action="{{ route('admin.toy.edit', $toy->getId()) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn">DELETE</button>
    </form>
    </div>
    @endif
    @endforeach
</div>
@endsection