@extends('layouts.catalog')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
    <div id="wrapper">
        <div id="table-of-contents">
            <h2>Table of Contents</h2>
           <ul>
            <li><a href="#cars">RC Cars</a></li>
            <li><a href="#boats">RC Boats</a></li>
            <li><a href="#helis">RC Helis</a></li>
           </ul> 
        </div>
        <div id="catalog">
            <!--Each sub catalog is hidden by default, drop down when hover-->
            <div class="sub-catalog" id="cars">
                <h2>RC Cars</h2>
                <!--sub-catalog-products is the container for the product grid-->
                <div class="sub-catalog-products" id="cars-catalog">
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-car")
                    @if($toy->getQuantity() > 0)
                    <ul class="product">
                        <li class="product-title">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}">
                            </a>
                            <ul class="product-details">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: {{ $toy->getQuantity() }}</li>
                                @if($toy->getQuantity() < 10)
                                <li>LOW STOCK</li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-car")
                    @if($toy->getQuantity() == 0)
                    <ul class="product">
                        <li class="product-title out-of-stock">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}" class="out-of-stock">
                            </a>
                            <ul class="product-details out-of-stock">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: OUT OF STOCK</li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
            <!--Each sub catalog is hidden by default, drop down when hover-->
            <div class="sub-catalog" id="boats">
                <h2>RC Boats</h2>
                <!--sub-catalog-products is the container for the product grid-->
                <div class="sub-catalog-products" id="boats-catalog">
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-boat")
                    @if($toy->getQuantity() > 0)
                    <ul class="product">
                        <li class="product-title">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}">
                            </a>
                            <ul class="product-details">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: {{ $toy->getQuantity() }}</li>
                                @if($toy->getQuantity() < 10)
                                <li>LOW STOCK</li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-boat")
                    @if($toy->getQuantity() == 0)
                    <ul class="product">
                        <li class="product-title out-of-stock">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}" class="out-of-stock">
                            </a>
                            <ul class="product-details out-of-stock">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: OUT OF STOCK</li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
            <!--Each sub catalog is hidden by default, drop down when hover-->
            <div class="sub-catalog" id="helis">
                <h2>RC Helis</h2>
                <!--sub-catalog-products is the container for the product grid-->
                <div class="sub-catalog-products" id="helis-catalog">
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-heli")
                    @if($toy->getQuantity() > 0)
                    <ul class="product">
                        <li class="product-title">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}">
                            </a>
                            <ul class="product-details">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: {{ $toy->getQuantity() }}</li>
                                @if($toy->getQuantity() < 10)
                                <li>LOW STOCK</li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                    @foreach($viewdata['toys'] as $toy)
                    @if($toy->getType() == "rc-heli")
                    @if($toy->getQuantity() == 0)
                    <ul class="product">
                        <li class="product-title out-of-stock">{{ $toy->getName() }}</li>
                        <li class="product-image">
                            <a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}">
                                <img src="{{ asset('/images/'.$toy->getImage()) }}" class="out-of-stock">
                            </a>
                            <ul class="product-details out-of-stock">
                                <li>Price: ${{ $toy->getPrice() }}</li>
                                <li>Stock: OUT OF STOCK</li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
@endsection