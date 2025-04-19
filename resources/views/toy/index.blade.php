@extends('layout.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="row">
    <!-- For each toy make a display card -->
    @foreach($viewdata["toys"] as $toy)
    <!-- Display all items on stock -->
    @if($toy->getQuantity() > 0)
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
        <ul>
            <li class="toy-name">{{ $toy->getName() }}</li>
            <li class="toy-image">
                <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                    <img src="{{ asset('/img/'.$toy->getImage()) }}" class="img-fluid rounded-start">
                </a>
            </li>
            <li class="toy-price">Price: ${{ $toy->getPrice() }}</li>
            <!-- If quantity above 100 then just display 99+ -->
            @if ($toy->getQuantity() > 99)
            <li class="toy-quantity">Stock: 99+</li>
            <!--If quantity is under 100 then display the actual number-->
            @elseif ($toy->getQuantity() > 10)
            <li class="toy-quantity">Stock: {{ $toy->getQuantity() }}</li>
            <!-- If quantity is low then display warning -->
            @else
            <li class="toy-quantity low-stock">Stock: {{ $toy->getQuantity() }} (Low Stock!)</li>
            @endif
        </ul>
    </div>
    </div>
    @endif
    @endforeach
    <!-- Below is for all out of stock items, they're placed at the bottom of the display -->
    @foreach($viewdata["toys"] as $toy)
    <!-- Display all items on stock -->
    @if($toy->getQuantity() == 0)
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
        <ul>
            <li class="toy-name">{{ $toy->getName() }}</li>
            <li class="toy-image">
                <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                    <img src="{{ asset('/img/'.$toy->getImage()) }}">
                </a>
            </li>
            <li class="toy-price">Price: ${{ $toy->getPrice() }}</li>
            <!--If low stock then display a warning-->
            <li class="toy-quantity">OUT OF STOCK</li>
        </ul>
    </div>
    </div>
    @endif
    @endforeach
</div>
@endsection