@extends('layouts.app')

@section('content')


<section class="login">
  <form method="POST" class="mt-8" action="{{ route('register') }}">
      @csrf
      <div class="button-group">
          <h2 class="jap-stroke text-center" data-text="ユーザーネーム">ユーザーネーム</h2>
          <input aria-label="username" name="name" type="text" required  placeholder="ユーザーネームを入力" >
      </div>
      <div class="button-group">
          <h2 class="jap-stroke text-center" data-text="電話番号">電話番号</h2>
          <input aria-label="Phone number"  autofocus name="mobile" type="text" value="{{ old('mobile') }}" required autocomplete="mobile"  placeholder="電話番号を入力">
      </div>
      <button type="submit">
          <img src="/img/btn_ログイン.png" alt="">
      </button>
      @include('partials._errors')
  </form>
  <br><br><br>
  <div>
  <a href="/phone" class="text-orange">ユーザーネーム忘れた方はこちら</a>
  </div>
</section>

@endsection
