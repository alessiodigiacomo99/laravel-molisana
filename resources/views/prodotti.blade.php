@extends('layout.app')
@section('style')
    <style>
        .container ul li:nth-child(2) a{
            color: #0d2240 !important;
            border-bottom: 5px solid #0d2240;
        }
    </style>
@endsection
@section('main')
@include('partials.main')
@endsection