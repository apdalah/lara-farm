@extends('layouts.app')

@section('content')
<section class="main-body text-center">
    <div class="fixed-veg right-veg d-sm-none d-md-block">
      <img src="/img/right-veg.png" alt="">
    </div>
    <div class="fixed-veg left-veg d-sm-none d-md-block">
      <a to="/login" class="text-orange"><img src="/img/left-veg.png" alt=""></a>
    </div>
    <div class="container">
        <img class="farm-ann" src="/img/area_logo.png">
      <br><br>
      <h1 class="jap-stroke text-center" data-text="農地と作物を入れると自動でカレンダーを作成して あなたの農業ライフをお助け！">
        農地と作物を入れると自動でカレンダーを作成して あなたの農業ライフをお助け！
      </h1>
      <br>
      <div>
        <a href="/fields" class="text-orange"><img src="/img/btn_big_ログイン.png" alt=""></a>
      </div>

      <br><br>
      <a href="http://www.japanagtech.jp/"><img style="width:350px;border-radius:15px" src="/img/home.jpg" alt=""></a>
      <br>
      <div>
        <img src="/img/area_ribbon.png" alt="">
      </div>
      <div class="row">
        <div class="col-md-4">
          <img src="/img/farmer.png" alt="">
          <h2 class="jap-stroke text-center" data-text="世界中で1000万以上の
          農家が使ってる">世界中で1000万以上の
            農家が使ってる</h2>
        </div>
        <div class="col-md-4">
          <img src="/img/free.png" alt="">
          <h2 class="jap-stroke text-center" data-text="無料で使える">無料で使える</h2>
        </div>
        <div class="col-md-4">
          <img src="/img/robot.png" alt="">
          <h2 class="jap-stroke text-center" data-text="AIがスケジュールを
          全て管理">AIがスケジュールを
            全て管理</h2>
        </div>
      </div>
      <br><br><br>
      <div>
        <a href="/fields" class="text-orange"><img src="/img/btn_big_ログイン.png" alt=""></a>
      </div>
    </div>
  </section>

@endsection
