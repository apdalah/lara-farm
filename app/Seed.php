<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $table = "seeding";
    
    protected $dates = ['created_at', 'updated_at'];
}
