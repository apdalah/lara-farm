@extends('layouts.app')

@section('content')
<section class="details">
    <div class="window-box">
      <div class="head d-flex align-items-center ">
        <img src="/img/ic_Vegetable.png" alt="" />
        <h2>
          野菜一覧
        </h2>
      </div>
      <div class="body text-left">
        @if($events)
                @foreach($events as $field)
                @php $plant = \App\Plant::find($field->getPlant()->id) @endphp
                    <div class="info-row d-flex">
                        <div class="info-logo">
                        <img src="/img/vegetables/{{ $plant->id}}.png" alt="">
                        </div>
                        <div class="info-column">
                            <div class="info-cell">
                                <div class="det-title">エリア:</div>
                                <div class="det-content">{{ $field->name }}</div>
                            </div>
                            <div class="info-cell">
                                <div class="det-title">
                                野菜:
                                </div>
                                <div class="det-content">
                                    {{ $plant->name }}
                                </div>
                            </div>
                            {{-- @if(isset($timeToPlant))
                            <div class="info-cell">
                                <div class="det-title">
                                植物の時間:
                                </div>
                                <div class="det-content">
                                    タネを植える時間です。
                                </div>
                            </div>
                            @endif --}}
                            <div class="info-cell d-flex align-items-center">
                               <div class="det-title power">
                                    @php 
                                        $date = explode('/', $_SERVER['REQUEST_URI']);
                                        $date = end($date);
                                    @endphp
                                    
                                    {{ $plant->watering($field->is_first, $date)->fertilizer_type }}:
                                    

                                </div><div class="det-content power"> 

                                    {{ $plant->watering($field->is_first, $date)->fertilizer_amount }}m2 {{ $plant->watering($field->is_first, $date)->water_amount }}ml 
                                
                                </div>
                            </div>

                        </div>

                    </div>

                @endforeach
        @else
            {{-- Nothing is happening on this day ! --}}
            予定は何もありません
	    @endif

      </div>
    </div>
</section>


@endsection


