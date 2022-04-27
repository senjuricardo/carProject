<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Owner;

class Car extends Model
{
    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
