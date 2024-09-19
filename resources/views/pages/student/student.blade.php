@extends('layouts.app')

@section("title")
    @yield("title")
@endsection

@section("sidebar")
    @include('components.sidebar', ['menuItems' => ['Dashboard', 'Assignment']])
@endsection

@section("content")
    @yield("content")
@endsection