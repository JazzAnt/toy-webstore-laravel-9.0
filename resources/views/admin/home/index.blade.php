@extends('admin.layouts.admin')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <h2 class="card-title">Administration Hub</h2>
        </div>
        <div class="col-md-12">
            <p class="card-text">
                Welcome to the administration hub.
            </p>
        </div>
    </div>
</div>

<div class="card card-lower">
    <div class="row warning">
        <h5>Products out of stock</h5>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
            @foreach($viewdata['toys'] as $toy)
            @if($toy->getQuantity() == 0)
            <tr>
                <td>{{$toy->getId()}}</td>
                <td>{{$toy->getName()}}</td>
                <td>{{$toy->getType()}}</td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</div>
@endsection