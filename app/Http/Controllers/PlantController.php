<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;

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

    public function updatePlantField(Field $field)
    {
        $plant = \DB::table('seeding')->where('field_id', '=', $field->id)->delete();
        return redirect('/fields/'. $field->id);
    }
    
}
