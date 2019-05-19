@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<!--トップページのヘッダー画像の部分-->
@include('contents.top_header')

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
    <div class="col-12 col-md-9 mt-3">

      <div class="nes-container is-rounded is-dark col-12 mt-3">
        <div class="row p-2">
          <div class="col-2">
            <img class="icon-img" src="/assets/test-dot.jpeg" alt="">
          </div>
          <div class="col-10">
            ユーザー名
            <br>
            2019年5月12日
            <br>
            <p class="h4 pt-2">ショップ名や施設名 <span class="h6">[ 都道府県 ]</span></p>
            <p class="py-2">Good morning. Thou hast had a good night's sleep, I hope.
              ここにテキストが入ります。テキストが入ります。ここにテキストが入ります。テキストが入ります。
            </p>

            <p class="text-center">
              <a class="nes-btn text-center text-dark">続きを読む</a>
            </p>

            <div class="col-12">
              <i class="nes-icon is-small heart"></i>
              <span class="h5"> 0</span>
            </div>
          </div>    
        </div>
      </div>
      @include('contents.posts')
      <div class="col-12 text-center my-3">
        <button type="button" class="nes-btn is-error">投稿一覧をみる 〉</button>
      </div>
      
      
    </div><!-- PC表示のメインコンテンツ終了 -->
    <!-- PC表示のサイドバー -->
    <div class="col-md-3 col-12 mt-3">
      <div class="col-12 bg-dark p-2">
        <div class="nes-container is-dark with-title">
          <p class="title">Menu</p>
          <p>冒険の書1</p>
        </div>
      </div>

    </div><!-- PC表示のサイドバー終了 -->
  </div>

</div><!-- end container -->

@include('contents.wanted')
@include('contents.shops')

<!-- あとで消すやつ -->
<div class="container mt-3">

  <div class="col-12 bg-white mt-3">
    <div class="row">

      <div class="col-12 col-md-3 p-3" >
        <img class="shop-img" src="/assets/poteto.jpg" alt="">
      </div>
      <div class="col-7 col-md-9 p-3">
        <div class="row">
          <div class="col-12">
            <span class="h3">
              ショップや施設名
            </span>
            <br>
            <p class="">
              都道府県市区町村番地 建物名や号室
            </p>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col-4 col-md-3 nes-badge">
                <span class="is-primary">形態</span>
              </div>
              <div class="col-7 col-md-7 ml-3 pt-2">
                ゲームショップ
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col-4 col-md-3 nes-badge">
                <span class="is-error">特徴</span>
              </div>
              <div class="col-8 col-md-8 ml-3 pt-2">
                <span>ソフト ◯</span>
                <span>基盤 ◯</span>
                <span>買取 ◯</span>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-3 pt-3">
                営業時間：10:00〜19:00
              </div>
              <div class="col-3 pt-3">
                定休日：毎週月曜日
              </div>
              <div class="col-6">
                <span class="pr-1">行きたい</span> <a class="nes-btn text-red h5 p-1"><span class="text-red">12</span></a>
                <span class="pr-1">行った</span> <a class="nes-btn text-red h5 p-1"><span class="text-red">9</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end col-12 -->
  <div class="col-12 bg-white my-3">
    <div class="row">

      <div class="col-12 col-md-3 p-3" >
        <img class="shop-img" src="/assets/poteto.jpg" alt="">
      </div>
      <div class="col-7 col-md-9 p-3">
        <div class="row">
          <div class="col-12">
            <span class="h3">
              ショップや施設名
            </span>
            <br>
            <p class="">
              都道府県市区町村番地 建物名や号室
            </p>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col-4 col-md-3 nes-badge">
                <span class="is-primary">形態</span>
              </div>
              <div class="col-7 col-md-7 ml-3 pt-2">
                ゲームショップ
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col-4 col-md-3 nes-badge">
                <span class="is-error">特徴</span>
              </div>
              <div class="col-8 col-md-8 ml-3 pt-2">
                <span>ソフト ◯</span>
                <span>基盤 ◯</span>
                <span>買取 ◯</span>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-3 pt-3">
                営業時間：10:00〜19:00
              </div>
              <div class="col-3 pt-3">
                定休日：毎週月曜日
              </div>
              <div class="col-6">
                <span class="pr-1">行きたい</span> <a class="nes-btn text-red h5 p-1"><span class="text-red">12</span></a>
                <span class="pr-1">行った</span> <a class="nes-btn text-red h5 p-1"><span class="text-red">9</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end col-12 -->
</div><!-- end container -->
<!-- あとで消すやつ上の部分-->
<div class="col-12 text-center">
  <button type="button" class="nes-btn is-error text-center">ショップ・施設一覧へ 〉</button>
</div>




@include('inc.footer')

@endsection