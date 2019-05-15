@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container-fluid text-white jumbotron">
    <div class="bg-mask d-flex align-items-center">
        <h1 class="text-white font-weight-bold text-center display-3 w-100">Retro Game Map(仮)</h1>
    </div>
</div>

@endsection