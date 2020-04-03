@extends('layouts.app')

@section('content')

<div class="container">
	<section class="my-page">
        <div class="window-box">
          <div class="head d-flex align-items-center ">
            <h2>
              お知らせ一覧
            </h2>
          </div>
          <div class="body text-left">
            <div class="button-group">
              <h2 class="jap-stroke text-center" data-text="ユーザーネーム">ユーザーネーム</h2>
              <input type="text" name="" id="" placeholder="ユーザーネームを入力">
            </div>
            <div class="button-group">
              <h2 class="jap-stroke text-center" data-text="電話番号">電話番号</h2>
              <input type="text" name="" id="" placeholder="000-0000-0000">
            </div>

          </div>
        </div>

        <ul class="links text-left text-orange">
          <li>
            <router-link to="/terms" class="text-orange">利用規約</router-link>
          </li>
          <li>
            <router-link to="/privacy" class="text-orange">プライバシーポリシー</router-link>
          </li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                {{ __('Logout') }} >サービス情報</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
          </li>
        </ul>


      </section>
</div>

@endsection


