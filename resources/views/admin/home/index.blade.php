@extends('admin.layouts.app')
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
@endsection