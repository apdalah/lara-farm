@extends('layouts.app')

@section('content')
<section class="details">
    <div class="window-box">
      <div class="head d-flex align-items-center ">
        <img src="{{ asset('img/ic_Vegetable.png') }}" alt="" />
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
                        <img src="{{ asset('img/vegetables/' .$plant->id. '.png') }}" alt="">
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
                                    <p style="margin-bottom: 10px;">{{ $plant->name }}</p>

                                    <a style="font-size: 12px;" href="{{ route('edit-plant', ['plant' => $plant->id, 'field' => $field->id]) }}">Change Plant</a>
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
                                        $seedingStartTime = (new Carbon\Carbon($field->getStartPlantTime()))->subDays(8);
                                    @endphp
                                    <span style="font-size: 10px">Fertilizer:</span>
                                    

                                </div>
                                <div class="det-content power">

                                    <span style="font-size: 10px">
                                        {{ $plant->watering($field->is_first, $date, $seedingStartTime) ?  $plant->watering($field->is_first, $date, $seedingStartTime)->fertilizer_type : ''}} => {{ $plant->watering($field->is_first, $date, $seedingStartTime) ? ($plant->watering($field->is_first, $date, $seedingStartTime)->fertilizer_amount) * ($field->height * $field->width) : ''}} m
                                    </span>
                                
                                </div>
                            </div>

                            <div class="info-cell d-flex align-items-center">
                               <div class="det-title power">
                                    <span style="font-size: 12px">Water:</span>
                                </div>

                                <div class="det-content power">
                                    <span style="font-size: 12px">
                                        {{ $plant->watering($field->is_first, $date, $seedingStartTime) ? $plant->watering($field->is_first, $date, $seedingStartTime)->water_amount : '' }}ml 
                                    </span>
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


