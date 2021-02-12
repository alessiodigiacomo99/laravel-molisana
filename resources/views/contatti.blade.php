@extends ('layout.app')
@section('style')
    <style>
        .container ul li:last-child a{
            color: #0d2240 !important;
            border-bottom: 5px solid #0d2240;
        }
    </style>
@endsection
@section('main')
    @include('partials.content')
@endsection