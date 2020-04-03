<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function calendar($time) {

        $events = [];
        $timeToPlant ="" ;
        foreach(auth()->user()->fields as $field) {
           if($field->hasPlant()){
            foreach($field->plans() as $plan){
                if((new \Carbon\Carbon($field->getStartPlantTime()->format("Y-m-d")))->addDays($plan->shifting)->toDateString() == $time ) {
                    array_push($events, $field);
                }
            }
        	if($field->getStartPlantTime()->subDays(7)->toDateString() == $time) {
	    		array_push($events, $field);
        	}
        	if($field->getStartPlantTime()->toDateString() == $time) {
                $timeToPlant = $field;
        	}
           }

        }
        return view('calender', compact('events', 'timeToPlant'));
    }

}
