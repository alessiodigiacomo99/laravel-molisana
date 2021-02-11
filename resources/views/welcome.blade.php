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
<!-- Riproducete lo screenshot in allegato usando Laravel e SASS, per questo esercizio non serve usare bootstrap, potete fare tutto con qualche regola css.
Il sito ha tre pagine, home, prodotti e contatti. Nelle pagine home e contatti potete mettere quello che volete.
 -->