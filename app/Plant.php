<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $guarded = [];

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function fields() {
    	$this->belongsToMany(Field::class);
    }

    public function watering($is_first, $date, $created_at) {

    	return \DB::table('watering')->where([
            'category_id' => $this->category_id,
            'is_first' => $is_first,
            'shifting' => date_diff(date_create(date('Y-m-d', strtotime($created_at. '+ 1 days'))) , date_create($date))->format('%a')
        ])->first();
    }

}
