@extends('layouts.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="purchase-details">
    <h2>Cart Contents</h2>
    <table>
        <colgroup>
            <col id="column-image">
            <col id="column-name">
            <col class="column-quantity" span="3">
            <col id="column-cost">
            <col id="column-delete">
        </colgroup>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th class="quantity">Quantity</th>
            <th class="quantity"></th>
            <th class="quantity"></th>
            <th>Cost</th>
            <th>Cancel</th>
        </tr>
        @foreach($viewdata['carts'] as $cart)
        <tr class="purchase-row">
            <td><img src="{{ asset('/images/'.$cart->getToy()->getImage()) }}"></td>
            <td>{{ $cart->getToy()->getName() }}</td>
            
            <td>
                <form action="{{ route('toy.checkout.decrease', ['id'=> $cart->getToyId()]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="quantity-alter" type="submit">-</button>
                </form>
            </td>
            <td>{{ $cart->getQuantity() }}</td>
            <td>
                <form action="{{ route('toy.checkout.add', ['id'=> $cart->getToyId()]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="quantity-alter" type="submit">+</button>
                </form>
            </td>

            <td>${{ $cart->calculateCost() }}</td>
            <td>
                <form action="{{ route('toy.checkout.delete', ['id'=> $cart->getToyId()]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @if($viewdata['totalcost']==0)
        <tr id="empty-cart">
            <td></td>
            <td>You have no items in the cart!</td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="button" href="{{ route('toy.index') }}">Go To Catalog</a</td>
            <td></td>
        </tr>
        @endif
        <tr id="totalcost">
            <td></td>
            <td>Total Cost</td>
            <td></td>
            <td></td>
            <td></td>
            <td>${{$viewdata['totalcost']}}</td>
            <td></td>
        </tr>
    </table>
    @if($viewdata['totalcost']>0)
    <form action="{{ route('toy.checkout.purchase') }}" method="post">
        @csrf
        @method('PUT')
        <button id="purchase-button" type="submit">Purchase All</button>
    </form>   
    @endif
</div>

@endsection