@extends('layout.app')
@section('header')
@include('partials.header')
@endsection
@section('style')
    <style>
        ul li:nth-child(2) a{
            color: rgb(0, 0, 145) !important;
            border-bottom: 5px solid rgb(0, 0, 145);
        }
    </style>
@endsection
@section('main')
@include('partials.main')
@endsection