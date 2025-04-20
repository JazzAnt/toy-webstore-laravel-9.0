@extends('admin.layouts.admin')
@include('admin.toy.add_form')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
@yield('add_form')
@endsection