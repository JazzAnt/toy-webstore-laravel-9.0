@extends('layouts.app')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
<div id="wrapper">
    <section id="overview">
        <h2>Welcome to The Toy Store!</h2>
            <p>
                Welcome to our toy store. Here we mainly sell Remote Control (RC) Cars but you can find other toys as well! 
                We hope you enjoy your visit to our website and spend lots of money!
            </p>
    </section>
    <div id="home-image">
        <figure>
                <img src="{{ asset('/img/rc-cars.jpg') }}">
                <figcaption>Our RC Cars in a Race!</figcaption>
        </figure>
    </div>
</div>
@endsection