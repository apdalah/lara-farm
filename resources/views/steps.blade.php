@extends('layouts.app')

@section('content')
<section class="main-body text-center">
    <div class="fixed-veg right-veg d-sm-none d-md-block">
      <img src="{{ asset('img/right-veg.png') }}" alt="">
    </div>
    <div class="fixed-veg left-veg d-sm-none d-md-block">
      <img src="{{ asset('img/left-veg.png') }}" alt="">
    </div>
    <div class="container">
        <img class="farm-ann" src="{{ asset('img/area_en_ribbon.png') }}">
      <br><br>
      <h1 class="jap-stroke text-center" data-text="悪い菌をなくす、Zeus powerと">
        悪い菌をなくす、Zeus powerと
      </h1>
      <h1 class="jap-stroke text-center" data-text="良い菌を増やす、bacteria powerを">
        良い菌を増やす、bacteria powerを
      </h1>
      <h1 class="jap-stroke text-center" data-text="効率的に使うためのサポートツールです">
        効率的に使うためのサポートツールです
      </h1>
      <br><br><br>
      <div>
        <a href="/fields" class="text-orange"><img src="{{ asset('img/bg_ribbon.png') }}" alt=""></a>
      </div>

      <br><br><br>


      <div class="row">
        <div class="col-12 text-center">
            <div class="steps">
                <img src="{{ asset('img/info_1.png') }}" alt="">
            </div>
            <div class="steps">
                <img src="{{ asset('img/info_2.png') }}" alt="">
            </div>
            <div class="steps">
                <img src="{{ asset('img/info_3.png') }}" alt="">
            </div>
            <div class="steps">
                <img src="{{ asset('img/info_4.png') }}" alt="">
            </div>
        </div>
      </div>
      <br><br><br>
      <div>
        <a href="/fields" class="text-orange"><img src="{{asset('img/btn_big_ログイン.png')}}" alt=""></a>
      </div>
    </div>
  </section>

@endsection
