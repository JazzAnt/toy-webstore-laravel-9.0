@extends('admin.layouts.admin')
@include('admin.toy.edit_form')
@section('title', $viewdata["title"])
@section('subtitle', $viewdata["subtitle"])
@section('content')
@yield('edit_form')
@endsection