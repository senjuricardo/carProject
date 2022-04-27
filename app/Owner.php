<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;
use App\Country;

class Owner extends Model
{
    public function Cars()
    {
        return $this->hasMany(Car::class);
    }
    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
}
