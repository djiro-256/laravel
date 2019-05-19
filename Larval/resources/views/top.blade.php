@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<!--トップページのヘッダー画像の部分-->
@include('contents.top_header')

<!-- 最新の投稿を表示 サイドバーも-->
@include('contents.posts_top')

<!-- ショップ情報募集中 -->
@include('contents.wanted')

<!-- ショップ新着投稿表示 -->
@include('contents.shops')

<!-- 都道府県から探す -->
@include('contents.pref')

<!-- フッター -->
@include('inc.footer')

@endsection