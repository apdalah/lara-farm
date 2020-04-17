<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Plant;

class PlantController extends Controller
{
    public function index() {
    	return view('plants.index');
    }

    public function plantField(Request $request, Field $field) {
    	$this->validate($request, [
            'plant_id' => 'required|exists:plants,id',
        ]);
    	\DB::table('seeding')->insert(
		    ['field_id' => $field->id, 'plant_id' => $request->plant_id, 'created_at' => new \DateTime()]
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
