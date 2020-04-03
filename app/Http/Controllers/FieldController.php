<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Plant;

class FieldController extends Controller
{
	public function index()
	{
        $fields = auth()->user()->fields;
        $plants = Plant::all();
    	return view('fields.index', compact('fields', 'plants'));
	}

    public function create()
    {
    	return view('fields.create');
    }

    public function store(Request $request) {
    	$field = $this->validate($request, [
    		'name' => 'required',
    		'width' => 'required',
    		'height' => 'required'
    	]);
    	auth()->user()->fields()->create($field);

    	return redirect('/fields');
    }

    public function show(Field $field) {
        $fields = auth()->user()->fields;
        $plants = Plant::all();
        return view('fields.show', compact('fields','field', 'plants'));
    }


}
