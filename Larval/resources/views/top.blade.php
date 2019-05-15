@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container-fluid text-white jumbotron">

    <div class="bg-mask align-items-center">
    <h1 class="dot-ja text-center pt-5 h3">全国のレトロゲームショップが見つかるサイト</h1>
        <br>
        <h1 class="nes-text dot-font text-white text-center display-5 w-100">Retro Game Map</h1>
    </div>
</div>

@endsection