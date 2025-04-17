@extends('layout.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <h2 class="card-title">Welcome to the Toy Store!</h2>
        </div>
        <div class="col-md-8">
            <p class="card-text">
                Welcome to our toy store. Here we mainly sell Remote Control (RC) Cars but you can find other toys as well! 
                We hope you enjoy your visit to our website and spend lots of money!
            </p>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="{{ asset('/img/rc-cars.jpg') }}">
                <figcaption>Our RC Cars in a Race!</figcaption>
            </figure>
        </div>
    </div>
</div>
@endsection