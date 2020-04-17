<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $guard = 'farmer';

    protected $fillable = [
        'name', 'mobile',
    ];

    public function fields() {
        return $this->hasMany(Field::class);
    }
}
