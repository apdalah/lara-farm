<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Plant;
use Carbon\Carbon;

class PlantController extends Controller
{
    public function index() {
    	return view('plants.index');
    }

    public function plantField(Request $request, Field $field) {
    	$this->validate($request, [
            'plant_time' => 'required | date_format:Y-m-d',
            'plant_id' => 'required | exists:plants,id',
        ]);

        $plant_time = (new Carbon($request->plant_time))->setTime(9,30,0);

    	\DB::table('seeding')->insert(
		    // ['field_id' => $field->id, 'plant_id' => $request->plant_id, 'created_at' => new \DateTime()]
            ['field_id' => $field->id, 'plant_id' => $request->plant_id, 'created_at' => $plant_time]
		);

		return redirect('/fields/'. $field->id);
    }

    public function editPlant(Plant $plant, Field $field)
    {
        $plants = Plant::all();

        return view('plants/edit', compact('plants', 'field'));
    }

    public function updatePlant(Request $request, Field $field)
    {   
        $request->validate(['plant_id' => 'required']);
        $plant = \DB::table('seeding')->where('field_id', '=', $field->id)->update([
            'plant_id' => $request->plant_id
        ]);
        return redirect('/fields/'. $field->id);
    }
    
}
