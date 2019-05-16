@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<!--トップページのヘッダー画像の部分-->
@include('contens.top_header')

<!--メインコンテンツ-->
<div class="container bg-white">
  <h2 class="pt-3">
    新着投稿
    <span class="h6">
      ショップやゲームセンターに行った記録を投稿しよう
    </span>
  </h2>
  <div class="row">
    <!-- PC表示のメインコンテンツ -->
    <div class="col-md-9">
      テスト
      <br>
      あああああ
      テスト
      <br>
      あああああ
      テスト
      <br>
      あああああ
    </div><!-- PC表示のメインコンテンツ終了 -->
    <!-- PC表示のサイドバー -->
    <div class="col-md-3">
    テスト
      <br>
      あああああ
      テスト
      <br>
      あああああ
      テスト
      <br>
      あああああ

    </div><!-- PC表示のサイドバー終了 -->
  </div>

</div>


@endsection