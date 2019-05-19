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