@extends('layouts.app')

@section('content')


<section class="area col-12">
  <div class="window-box" v-if="window == 'fieldWindow'">
    <div class="head d-flex align-items-center ">
      <img src="/img/ic_area.png" alt="" />
      <h2>
        土地詳細
      </h2>
    </div>
    <div class="body text-left" >
        <div class="choose-area">
          <h3 class="jap-stroke text-center" data-text="土地の選択">土地の選択</h3>
            @if($fields->count())
                <div class="jp-select-box">
                    <select id="choosefield" name="field_id">
                    {{-- <a href="{{ url('/fields/' . ) }}" class="text-gray-800"></a> --}}
                        @foreach($fields as $field)
                            <option value="{{$field->id}}">{{ $field->name }}
                                @if($field->hasPlant())
                                    <span class="text-gray-800">Already Planted with {{ $field->getPlant()->name }}</span><br>
                                    <span>|</span> {{ $field->getPlant()->name }}
        					    @endif
                            </option>
        					</div>
                        @endforeach
                    </select>
                </div>
                <button type="submit" id="submit_field">
                    <img src="/img/img_btn.png" alt="">
                </button>
			@else
			    No fields are available !!</a>
            @endif




        </div>
        <div class="create-area">
          <h3 class="jap-stroke text-center" data-text="新しく土地を追加する">新しく土地を追加する</h3>
          <form method="POST" action="/fields">
                @csrf

                <input name="name" id="grid-password" type="text" placeholder="土地の名前を入力して下さい">
                <div class="area-square">
                <input name="width" id="grid-first-name" type="text" placeholder="9999"><sub>m</sub> <span class="jap-stroke text-center" data-text="x">x</span><input name="height" id="grid-last-name" type="text"  placeholder="9999"><sub>m</sub>
                </div>
                <button type="submit"><img src="/img/img_btn.png" alt=""></button>
            </form>
        </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
    $('#submit_field').click(function() {
      window.location = '/fields/' + $('#choosefield').val();
    });
</script>
@endpush


