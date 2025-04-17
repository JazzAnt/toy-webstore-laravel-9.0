@extends('layout.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="card mb-3">
<div class="row">
    <div class="col-md-4">
        <img src="{{ asset('/img/'.$viewdata['toy']->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
       <div class="card-body">
            <h2 class="card-title">{{$viewdata['toy']->getName()}}</h2>
            <h3 class="card-title">${{$viewdata['toy']->getPrice()}}</h3>
            <p class="card-text">{{$viewdata['toy']->getDescription()}}</p>
            <h5 class="card-text">Stock: {{$viewdata['toy']->getQuantity()}}</h5>
       </div> 
    </div>
</div>
</div>
@endsection