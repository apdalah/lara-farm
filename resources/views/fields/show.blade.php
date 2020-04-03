@extends('layouts.app')

@section('styles')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-12">
            <div class="calednar-section">
                @if($field->hasPlant())
            
            <form action="{{ route('updatePlantFeild', $field->id) }}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" style="text-decoration: underline;">Change Plant -></button>
            </form>

            <div class="jap-box text-center">
                <div class="jp-select-box">
                    <select id="choosefield1" name="field_id">
                        {{-- <a href="{{ url('/fields/' . ) }}" class="text-gray-800"></a> --}}
                            @foreach($fields as $fieldo)
                                <option value="{{$fieldo->id}}" {{ $field->id == $fieldo->id ? 'selected' : '' }}>{{ $fieldo->name }}
                                    @if($fieldo->hasPlant())
                                        {{-- <span class="text-gray-800">Already Planted with {{ $field->getPlant()->name }}</span><br> --}}
                                        <span>|</span> {{ $fieldo->getPlant()->name }}
                                        {{-- @php var_dump($fieldo->getPlant()) @endphp --}}
                                    @endif
                                </option>
                            @endforeach
                    </select>
                </div>
              <div id='calendar'></div>
            </div>
            <a class="add_vegetable" href="/fields">
                <img src="/img/btn_addvegetable_jp.png" alt="">
            </a>

        </div>
            <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
            <script>
                $(document).ready(function() {
                    // page is now ready, initialize the calendar...
                    $('#calendar').fullCalendar({
                        // put your options and callbacks here

                        events : [
                            {
                              title : 'WATER',
                              start : '{{ $field->created_at->addDays(1) }}',
                              imageurl:'/img/ic_water.png'

                            },
                            @foreach($field->plans() as $plan)
                            {
                                title : 'WATER',
                                start : '{{ (new Carbon\Carbon($field->getStartPlantTime()))->addDays($plan->shifting) }}',
                                imageurl:'/img/ic_water.png'
                            },
                            @endforeach
                            {
                              title : 'PLANT',
                              start : '{{ $field->getStartPlantTime() }}',
                              imageurl:'/img/plant.png'
                            }
                        ],
                        eventRender: function(event, eventElement) {
                        if (event.imageurl) {
                            eventElement.find("div.fc-content").prepend("<a href='/calendar/"+ moment(event.start).format('YYYY-MM-DD') +"'><img src='" + event.imageurl +"' width='16'></a>");
                            }
                        },
                        dayClick: function(date, allDay, jsEvent, view) {
                          window.location = "/calendar/" + date.format();
                        },


                    })
                });


            </script>
            @else
            <div class="flex justify-center">
              <div class="window-box" >
                <div class="head d-flex align-items-center ">
                  <img src="/img/ic_area.png" alt="" />
                  <h2>
                    野菜詳細
                  </h2>
                </div>
                <div class="body text-left">
                    <div>
                      <h3 class="jap-stroke text-center" data-text="土地の選択">土地の選択</h3>
                      <form action="/plant_field/{{$field->id}}" method="POST" class="add_plant">
                        @csrf
                        <div class="jp-select-plant row justify-content-center">
                              @foreach($plants as $plant)
                              {{-- <option value="">{{ $plant->name }}</option> --}}
                                <input type="radio" name="plant_id" class="selectPlant" value="{{ $plant->id }}" style="background-image: url(/img/vegetables/{{ $plant->id }}.png)">
                              @endforeach
                              {{-- <select aria-label="plant" name="plant_id" class="form-select h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-800 sm:text-sm sm:leading-5">
                            </select> --}}

                        </div>
                        <button type="submit"><img src="/img/img_btn.png" alt=""></button>
                      </form>

                    </div>

                </div>
              </div>
            </div>
            @endif
            </div>

        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    $('#choosefield1').change(function() {
      window.location = '/fields/' + $('#choosefield1').val();
    });
</script>
@endpush
