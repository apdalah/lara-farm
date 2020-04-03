<!DOCTYPE html>
<html>
<head>
  <title>Farm</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('styles')
</head>
<body>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

<nav class="navbar" x-data="{ open: false }" @keydown.window.escape="open = false">
    <div class="container">
      <div class="row w-100">
        <div class="col-3 text-left">
          <h1>
            <a href="/"><img src="/img/logo.png" alt=""></a>
          </h1>
        </div>
        <div class="ml-auto">
          <div class="menu text-right">
            <a href="/steps">チュートリアル</a>
            @if (Auth::guest())
            <a href="/login" ><img src="/img/btn_ログイン.png" alt=""></a>
            <a href="/register"><img src="/img/btn_register.png" alt=""></a>
            @else
            <a href="/notes" ><img src="/img/ic_notification.png" alt=""></a>
            <a href="/setting"><img src="/img/ベクトルスマートオブジェクト.png" alt=""></a>

            @endif
          </div>
        </div>
      </div>
    </div>
  </nav>
  <main>

          @yield('content')

  </main>


<footer class="main-footer">
    <div class="decor">
      <img src="/img/deco_grass.png" alt="">
      <div class="green-bg"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col ">
          <ul class="d-flex justify-content-center">
            <li><a href="http://www.japanagtech.jp/index.php/about/">企業概要</a></li>
            <li><a href="http://www.japanagtech.jp/index.php/privacy-policy/">プライバシーポリシー</a></li>
            <li><a href="http://www.japanagtech.jp/index.php/contact/">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="copyright">
              <p>Copyright(C) <a href="http://www.japanagtech.jp/">japanagtech</a> All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>



@if(!\Request::is('fields/*'))
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@stack('scripts')
</body>
</html>
