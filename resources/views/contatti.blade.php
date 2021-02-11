@extends ('layout.app')
@section('style')
    <style>
        ul li:last-child a{
            color: rgb(0, 0, 145) !important;
            border-bottom: 5px solid rgb(0, 0, 145);
        }
    </style>
@endsection
@section('header')
    @include('partials.header')
@endsection
@section('main')
    <div>contatti</div>
@endsection