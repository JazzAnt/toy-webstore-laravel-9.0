@extends('layout.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
    <div id="wrapper">
        <div id="image1">
            <img src="{{ asset('/img/'.$viewdata['toy']->getImage()) }}">
        </div>
        <div id="image2">
            <img src="{{ asset('/img/'.$viewdata['toy']->getImage()) }}">
        </div>
        <div id="details">
            <h2>{{$viewdata['toy']->getName()}}</h2>
            <p class="card-text">{{$viewdata['toy']->getDescription()}}</p>
            <p>Price: ${{$viewdata['toy']->getPrice()}}</p>
            @if($viewdata['toy']->getQuantity() > 0)
            <p>Stock: {{$viewdata['toy']->getQuantity()}}</p>
            @if($viewdata['toy']->getQuantity() < 10)
            <p>LOW STOCK!</p>
            @endif
            <button>Add to Cart</button>
            @else
            <p>OUT OF STOCK</p>
            @endif
        </div>

        <div id="recommended">
            <h2>Similar Items</h2>
            @foreach($viewdata['toys'] as $toy)
                @if($loop->index >= 3)
                @break
                @endif
            <div class="recommended-items">
                <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                    <img src="{{ asset('/img/'.$toy->getImage()) }}">
                </a>
                <div class="recommended-details">
                    <h3>{{ $toy->getName() }}</h3>
                    <p>Price: ${{ $toy->getPrice() }}</p>
                    <p>Stock: {{ $toy->getQuantity() }}</p>
                </div>
            </div>           
            @endforeach
        </div>
    </div> 
@endsection