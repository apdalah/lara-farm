@extends('layouts.app')

@section('styles')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-12">
          
      
            <div class="flex justify-center">
              <div class="window-box" >
                <div class="head d-flex align-items-center ">
                  <img src="{{ asset('img/ic_area.png')}}" alt="" />
                  <h2>
                    野菜詳細
                  </h2>
                </div>
                <div class="body text-left">
                    <div>
                      <h3 class="jap-stroke text-center" data-text="土地の選択">土地の選択</h3>
                      <form action="{{route('update-plant', $field->id)}}" method="POST" class="add_plant">
                        @csrf
                        @method('PUT')
                        <div class="jp-select-plant row justify-content-center">
                              @foreach($plants as $plant)
                              {{-- <option value="">{{ $plant->name }}</option> --}}
                                <input type="radio" name="plant_id" class="selectPlant" value="{{ $plant->id }}" style="background-image: url(/img/vegetables/{{ $plant->id }}.png)">
                              @endforeach
                              {{-- <select aria-label="plant" name="plant_id" class="form-select h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-800 sm:text-sm sm:leading-5">
                            </select> --}}

                        </div>
                        <button type="submit"><img src="{{ asset('img/img_btn.png')}}" alt=""></button>
                      </form>

                    </div>

                </div>
              </div>
            </div>
           
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
