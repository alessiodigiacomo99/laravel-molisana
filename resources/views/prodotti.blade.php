@extends('layout.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('header')
    <div class="container">
        <img src="{{ asset('img/logo (1).png') }}" alt="">
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="prodotti">prodotti</a></li>
            <li><a href="contatti">contatti</a></li>
        </ul>
    </div>
    
@endsection
@section('main')
@endsection