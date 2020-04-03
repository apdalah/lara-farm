<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Field extends Model
{
    protected $guarded = [];

    public function owner() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function plant() {
    	return $this->belongsTo(Plant::class);
    }

    public function getPlant() {
        return \DB::table('plants')->where([
            'id' => $this->hasPlant()->plant_id
        ])->first();
    }
    

    public function hasPlant() 
    {
    	return \DB::table('seeding')->where(
    		['field_id' => $this->id]
    	)->first();
    }


    public function getStartPlantTime() {
    	$date  = \DB::table('seeding')->where(
    		['field_id' => $this->id]
    	)->first()->created_at;
    	return (new Carbon($date))->addDays(8);
    }
    
    public function plans() {
        $plant_id  = \DB::table('seeding')->where(
            ['field_id' => $this->id]
        )->first()->plant_id;

        $plant = Plant::find($plant_id)->first();

        return \DB::table('watering')->where(
            ['category_id' => $plant->category_id , 'is_first' => $this->is_first]
        )->get('shifting');
    }
            
}
